<?php 
namespace App\Services\Interfaces;
use App\Http\Requests\ReservationRequest;
use App\Http\Requests\RoomRequest;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

interface RoomServiceInterface{
    
    public function all();
    public function store (RoomRequest $request);
    public function update(RoomRequest $request, Room $room);
    public function delete(Room $room);

    public function allReservation();
    public function reservationAccepted( Reservation $reservation);

    public function rejectReservation( Reservation $reservation);


}