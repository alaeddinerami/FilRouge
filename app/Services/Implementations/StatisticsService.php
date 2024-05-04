<?php
namespace App\Services\Implementations;

use App\Repositories\Interfaces\StatisticsInterface;
use App\Services\Interfaces\StatisticsServiceInterface;

class StatisticsService implements StatisticsServiceInterface
{
    public function __construct(public StatisticsInterface $repository)
    {
    }
    public function usersCount()
    {
    }
    public function ordersCount()
    {
    }
    public function reservationCount()
    {
    }
    public function allorders()
    {
        return $this->repository->allorders();

    }
}