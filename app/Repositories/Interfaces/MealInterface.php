<?php

namespace App\Repositories\Interfaces;
use App\Models\Meal;

interface MealInterface {
    public function all();
    public function create(array $data);
    public function update(array $data, Meal $meal);
    public function delete(Meal $meal);
}