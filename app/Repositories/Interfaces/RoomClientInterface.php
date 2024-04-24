<?php
namespace App\Repositories\Interfaces;
use App\Models\Room;

interface RoomClientInterface{
    public function all();
    public function show(Room $room);

}