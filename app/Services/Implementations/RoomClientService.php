<?php 
namespace App\Services\Implementations;
use App\Services\Interfaces\RoomClientServiceInterface;

class RoomClientService implements RoomClientServiceInterface{

    public function __construct(public RoomClientService $repository){

    }
    public function all(){
        return $this->repository->all();
    }
}