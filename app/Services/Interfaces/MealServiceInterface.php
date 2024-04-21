<?php 
namespace App\Services\Interfaces;
use App\Http\Requests\Mealsrequest;
use App\Models\Meal;

interface   MealServiceInterface{
    public function all();
    public function store(Mealsrequest $request);
    public function update(Mealsrequest $request, Meal $meal);
    public function delete(Meal $meal);
}
