<?php
namespace App\Repositories\Implementations;
use App\Models\Room;
use App\Repositories\Interfaces\RoomClientInterface;

class RoomClientRepository implements RoomClientInterface{
    public function all(){
        return Room::paginate(3);
    }
    public function show(Room $room){

    }

}