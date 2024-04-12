<?php

namespace App\Repositories\Interfaces;
use App\Models\Room;

interface RoomInterface{
    public function all();
    public function create(array $data);
    public function update(array $data, Room $room);
    public function delete(Room $room);
}