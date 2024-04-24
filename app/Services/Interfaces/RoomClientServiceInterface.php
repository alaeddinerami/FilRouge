<?php

namespace App\Services\Interfaces;
use App\Models\Room;

interface RoomClientServiceInterface{
    public function all();
    public function show(Room $room);
}