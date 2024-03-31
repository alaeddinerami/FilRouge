<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\PasswordController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/users', [StudentController::class, 'StudentBan'])->name('Student.StudentBan');
Route::resource('/dashboard',DashboardController::class);

Route::resource('/meal',MealController::class);
Route::resource('/room',RoomController::class);
Route::get('/roomreservations', [RoomController::class, 'roomResirvation'])->name('room.roomResirvation');

Route::resource('/client',ClientController::class);

Route::resource('/register',RegisterController::class);
Route::resource('/login',LoginController::class);
Route::resource('/passwordrest',PasswordController::class);

Route::get('/', function () {
    return view('welcome');
});
