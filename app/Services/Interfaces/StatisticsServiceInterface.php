<?php
namespace App\Services\Interfaces;
interface StatisticsServiceInterface{
    public function usersCount();
    public function ordersCount();
    public function reservationCount();
}