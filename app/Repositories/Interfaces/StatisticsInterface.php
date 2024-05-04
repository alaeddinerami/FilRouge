<?php
namespace App\Repositories\Interfaces;

interface   StatisticsInterface{
    public function usersCount();
    public function ordersCount();
    public function reservationCount();
    public function allorders();
}