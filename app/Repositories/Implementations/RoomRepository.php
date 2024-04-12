<?php

namespace App\Repositories\Implementations;

use App\Models\Room;
use App\Repositories\Interfaces\RoomInterface;

class RoomRepository implements RoomInterface
{

    public function all()
    {
        return Room::all();
    }

    public function create(array $data)
    {
        return Room::create($data);
    }

    public function update(array $data, Room $room)
    {
        $room->update($data);
        return $room;
    }

    public function delete(Room $room)
    {
        return $room->delete();
    }
}