<?php
namespace App\Repositories\Implementations;

use App\Models\Reservation;
use App\Models\Student;
use App\Repositories\Interfaces\StatisticsInterface;
use Illuminate\Support\Facades\DB;

class StatisticsRepository implements StatisticsInterface
{
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
        $studentsCount = Student::count();
        $ordersCount = DB::selectOne('SELECT count(*) as count FROM meal_student_commande')->count;
        $reservationCount = Reservation::count();
        // dd($ordersCount);
        $orders = Student::with('commandemeal', 'users', 'users.image')
            ->has('commandemeal')
            ->withCount('commandemeal')
            ->paginate(1);
            // dd($orders);
        return view('dashboard.index', compact('studentsCount', 'ordersCount', 'reservationCount', 'orders'));

    }
}