<?php
namespace App\Services\Implementations;

use App\Http\Requests\ReservationRequest;
use App\Models\Room;
use App\Repositories\Interfaces\RoomClientInterface;
use App\Services\Interfaces\RoomClientServiceInterface;

class RoomClientService implements RoomClientServiceInterface
{

    public function __construct(public RoomClientInterface $repository)
    {

    }
    public function all()
    {
        return $this->repository->all();
    }
    public function show(Room $room)
    {
        return $this->repository->show($room);
    }

    public function allReservation()
    {
        return $this->repository->allReservation();
    }

    public function booking(ReservationRequest $request)
    {
        return $this->repository->booking($request);
    }


}