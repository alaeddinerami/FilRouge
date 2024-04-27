<?php
namespace App\Services\Implementations;

use App\Http\Requests\ReservationRequest;
use App\Http\Requests\RoomRequest;
use App\Models\Reservation;
use App\Models\Room;
use App\Repositories\Interfaces\RoomInterface;
use App\Services\Interfaces\RoomServiceInterface;
use Illuminate\Http\Request;

class RoomService implements RoomServiceInterface
{
    public function __construct(public RoomInterface $repository)
    {

    }

    public function all()
    {
        return $this->repository->all();
    }
    public function store(RoomRequest $request)
    {
        return $this->repository->store($request);

    }
    public function update(RoomRequest $request, Room $room)
    {
        return $this->repository->update($request, $room);

    }
    public function delete(Room $room)
    {
        return $this->repository->delete($room);

    }
    public function allReservation()
    {

        return $this->repository->allReservation();
    }
    public function reservationAccepted(Reservation $reservation)
    {
        return $this->repository->reservationAccepted($reservation);
    }

    public function rejectReservation(Reservation $reservation)
    {
        return $this->repository->rejectReservation($reservation);
    }

}