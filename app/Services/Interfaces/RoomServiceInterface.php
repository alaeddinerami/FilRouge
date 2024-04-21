<?php 
namespace App\Services\Interfaces;
use App\Http\Requests\RoomRequest;
use App\Models\Room;

interface RoomServiceInterface{
    
    public function all();
    public function store (RoomRequest $request);
    public function update(RoomRequest $request, Room $room);
    public function delete(Room $room);
}