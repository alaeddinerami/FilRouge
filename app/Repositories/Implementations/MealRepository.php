<?php

namespace App\Repositories\Implementations;

use App\Models\Meal;
use App\Repositories\Interfaces\MealInterface;

class MealRepository implements MealInterface
{
    public function all()
    {
        return Meal::all();
    }

    public function create(array $data)
    {
        return Meal::create($data);
    }

    public function update(array $data, Meal $meal)
    {
        $meal->update($data);
        return $meal;
    }

    public function delete(Meal $meal)
    {
        $meal->delete();
    }
}
