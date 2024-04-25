<?php

namespace App\Repositories\Implementations;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\RoomRequest;
use App\Models\Reservation;
use App\Models\Room;
use App\Repositories\Interfaces\RoomInterface;
use App\Traits\ImageUpload;

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
        if ($request->hasFile('image') && $room->image) {

            $this->updateImg($request->file('image'), $room);
        } else {
            $this->storeImg($request->file('image'), $room);
        }

    }


    public function delete(Room $room)
    {
        return $room->delete();
    }

    public function allReservation(){
        return Reservation::all();
        
    }

}