<?php
namespace App\Repositories\Implementations;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\Student;
use App\Repositories\Interfaces\RoomClientInterface;

class RoomClientRepository implements RoomClientInterface
{
    public function all()
    {
        return Room::paginate(3);
    }
    public function show(Room $room)
    {

        // $roomFound = Room::with([
        //     'reservations' => function ($query) {
        //         $query->orderBy('reservation_finishdate', 'desc')->first();
        //     }
        // ])->first();

        // $
        // dd($room->load('reservations'));
        return $room;
    }
    public function booking(ReservationRequest $request)
    {
        // dd('here');
        $validate = $request->validated();
        $condition = [
            "reserved_at" => $validate['reserved_at'],
            "finished_at" => $validate["finished_at"]
        ];
        $student = Student::where('user_id',auth()->id())->first();
        // dd($student);
        $reservationStudent = $student->reservations()
        ->where('status','accepted')
            ->where(function ($query) use ($condition) {
                $query->whereBetween('reserved_at', [$condition["reserved_at"], $condition["finished_at"]])
                    ->orWhereBetween('finished_at', [$condition["reserved_at"], $condition["finished_at"]])
                    ->orWhere(function ($query) use ($condition) {
                        $query->where('reserved_at', '<', $condition["reserved_at"])
                            ->where('finished_at', '>', $condition["finished_at"]);
                    });
            })
            ->exists();
            if ($reservationStudent) {
                return [
                    'message' => 'you already reseved in another room  !',
                    'operationSuccessful' => $this->operationSuccessful = false,
                ];
            }
        $room = Room::findOrFail($validate['room_id']);
        $userreservation = $room->reservations()->where('student_id',auth()->user()->students->id)->whereIn('status',['accepted','pending'])->exists();
        if ($userreservation) {
            return [
                'message' => 'you already reseved!',
                'operationSuccessful' => $this->operationSuccessful = false,
            ];
        }
        $reservation = $room->reservations()
        ->where('status','accepted')
            ->where(function ($query) use ($condition) {
                $query->whereBetween('reserved_at', [$condition["reserved_at"], $condition["finished_at"]])
                    ->orWhereBetween('finished_at', [$condition["reserved_at"], $condition["finished_at"]])
                    ->orWhere(function ($query) use ($condition) {
                        $query->where('reserved_at', '<', $condition["reserved_at"])
                            ->where('finished_at', '>', $condition["finished_at"]);
                    });
            })
            ->exists();
        // dump($reservation);
        if ($reservation) {
            return [
                'message' => 'this date is aready reseved!',
                'operationSuccessful' => $this->operationSuccessful = false,
            ];
        } else {
            $validate['finished_at'];
            $validate['student_id'] = auth()->user()->students->id;

            Reservation::create($validate);
            return [
                'message' => 'Room reserved successfully!',
                'operationSuccessful' => $this->operationSuccessful = true,
            ];
            ;
        }
    }

}