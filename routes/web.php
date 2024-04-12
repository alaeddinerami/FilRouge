<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\PasswordController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\client\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MealController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\client\MealController as ClientMealController;
use App\Http\Controllers\client\ArticleController as clientArticleController;

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
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/users', [StudentController::class, 'StudentBan'])->name('Student.StudentBan');
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/meal', MealController::class);
    Route::resource('/room', RoomController::class);
    Route::get('/roomreservations', [RoomController::class, 'roomResirvation'])->name('room.roomResirvation');
});

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::resource('/client', ClientController::class);
    Route::get('/profile',[ClientController::class,'showProfileImg'])->name('showProfileImg');
    Route::post('/storeProfileImg',[ClientController::class,'storeProfileImg'])->name('storeProfileImg');
    Route::resource('/meals', ClientMealController::class);
    Route::resource('/librarys', clientArticleController::class);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
});
Route::middleware(['guest'])->group(function () {
Route::resource('/register', RegisterController::class);
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::resource('/login', LoginController::class);
Route::resource('/passwordrest', PasswordController::class);
});

Route::get('/', function () {
    return view('welcome');
});
