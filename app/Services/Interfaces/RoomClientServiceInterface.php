<?php

namespace App\Services\Interfaces;
use App\Http\Requests\ReservationRequest;
use App\Models\Room;

interface RoomClientServiceInterface{
    public function all();
    public function show(Room $room);
    public function booking(ReservationRequest $request);
    public function myReservation();
    

}