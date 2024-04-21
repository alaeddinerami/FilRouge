<?php 
namespace App\Services\Interfaces;
use App\Models\Meal;
use Illuminate\Http\Request;

interface MealClientServiceInterface{
    public function all();
    public function show(Meal $meal);
    public function orderMeal(Request $request);
    public function addFavorit(Request $request);
    public function allFavorite();
}