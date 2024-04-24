<?php
namespace App\Services\Implementations;

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

}