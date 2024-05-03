<?php

namespace App\Repositories\Implementations;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ReservationRequest;
use App\Http\Requests\RoomRequest;
use App\Models\Reservation;
use App\Models\Room;
use App\Repositories\Interfaces\RoomInterface;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class RoomRepository implements RoomInterface
{
    use ImageUpload;
    public function all()
    {
        return Room::all();
    }

    public function store(RoomRequest $request)
    {
        // dd($request);
        $roomData = $request->all();
        $room = Room::create($roomData);
        if ($request->hasFile('image')) {

            $this->storeImg($request->file('image'), $room);

            return 'Room created successfully!';
        }

    }
    public function update(RoomRequest $request, Room $room)
    {
        // dd($room->image);
        $roomData = $request->all();
        $room->update($roomData);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
    
            if ($room->image) {
                $this->updateImg($image, $room);
            } else {
                $this->storeImg($image, $room);
            }
        }

    }


    public function delete(Room $room)
    {
        return $room->delete();
    }

    public function allReservation()
    {
        return Reservation::all();

    }
    public function reservationAccepted(Reservation $reservation)
    {
        $result = $reservation->status;
        if ($result == 'pending') {
            $reservation->update(['status' => 'accepted']);
        }
    }
    public function rejectReservation(Reservation $reservation)
    {
        $result = $reservation->status;
        // dd($result);
        if ($result != 'rejected') {
            $reservation->update(['status' => 'rejected']);
        }
    }


}