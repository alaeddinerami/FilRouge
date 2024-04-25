<?php
namespace App\Repositories\Interfaces;
use App\Http\Requests\ReservationRequest;
use App\Models\Room;

interface RoomClientInterface{
    public function all();
    public function show(Room $room);
    public function booking(ReservationRequest $request);

}