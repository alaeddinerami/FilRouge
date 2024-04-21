<?php

namespace App\Repositories\Interfaces;
use App\Models\Meal;
use Illuminate\Http\Request;

interface MealClientInterface{
    public function all();
    public function show(Meal $meal);
    public function orderMeal(Request $request);
    public function addFavorit(Request $request);
    public function allFavorite();
}