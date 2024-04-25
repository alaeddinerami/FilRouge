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
use App\Http\Controllers\client\RoomController as clientRoomController;

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
    Route::resource('/student',StudentController::class)->only('index');
    Route::patch('/users/{user}', [StudentController::class, 'StudentBan'])->name('Student.StudentBan');
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/meal', MealController::class);
    Route::resource('/room', RoomController::class);
    Route::get('/allReservation', [RoomController::class, 'allReservation'])->name('allReservation');
});
Route::middleware(['auth','userBan'])->group(function () {
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::resource('/client', ClientController::class);
    Route::get('/profile',[ClientController::class,'showProfileImg'])->name('showProfileImg');
    Route::post('/storeProfileImg',[ClientController::class,'storeProfileImg'])->name('storeProfileImg');
    Route::post('/addFavorit',[ClientMealController::class,'addFavorit'])->name('addFavorit.store');
    Route::get('/myfavorites',[ClientMealController::class,'allFavorite'])->name('allFavorite.display');
    Route::post('/feedbackStore',[ClientMealController::class,'feedbackStore'])->name('feedbackStore');
    Route::get('/feedbackDisplay',[ClientMealController::class,'feedbackDisplay'])->name('feedbackDisplay');
    Route::delete('/feedbackDelete/{feedback}',[ClientMealController::class,'feedbackDelete'])->name('feedbackDelete');
    Route::resource('/meals', ClientMealController::class);
    Route::get('/search',[clientArticleController::class,'search'])->name('search');
    Route::resource('/rooms',clientRoomController::class);
    Route::post('/booking',[clientRoomController::class,'booking'])->name('booking');
    Route::resource('/article', clientArticleController::class);
});
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
