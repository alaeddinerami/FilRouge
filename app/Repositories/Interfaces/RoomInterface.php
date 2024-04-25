<?php

namespace App\Repositories\Interfaces;
use App\Http\Requests\RoomRequest;
use App\Models\Reservation;
use App\Models\Room;

interface RoomInterface{
    public function all();
    public function store (RoomRequest $request);
    public function update(RoomRequest $request, Room $room);
    public function delete(Room $room);
    public function allReservation();

}