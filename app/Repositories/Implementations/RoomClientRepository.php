<?php
namespace App\Repositories\Implementations;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Room;
use App\Repositories\Interfaces\RoomClientInterface;

class RoomClientRepository implements RoomClientInterface
{
    public function all()
    {
        return Room::paginate(3);
    }
    public function show(Room $room)
    {
        
        $res = $room = Room::with(['reservations' => function ($query) {
            $query->orderBy('reservation_finishdate', 'desc')->first();
        }])->first();
        
        
        // dd($res);
        return $res;
    }
    public function booking(ReservationRequest $request)
    {
        $validate = $request->all();
        $validate['student_id'] = auth()->user()->students->id;

        Reservation::create($validate);
        // dd($res);
    }

}