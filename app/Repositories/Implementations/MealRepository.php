<?php

namespace App\Repositories\Implementations;

use App\Http\Requests\Mealsrequest;
use App\Models\Meal;
use App\Repositories\Interfaces\MealInterface;
use App\Traits\ImageUpload;

class MealRepository implements MealInterface
{
    use ImageUpload;
    public function all()
    {
        return Meal::paginate(5);
    }

    public function store(Mealsrequest $request)
    {
        $mealData = $request->only('name', 'description', 'price');
        $meal = Meal::create($mealData);
        if($request->hasFile('image')){
            $this->storeImg($request->file('image'), $meal);
        }
    }

    public function update(Mealsrequest $request, Meal $meal)
    {
        $mealData = $request->all();
        $meal->update($mealData);
        if ($request->hasFile('image')) {
            $this->storeImg($request->file('image'), $meal);
            $this->updateImg($request->file('image'), $meal);
        }
    }

    public function delete(Meal $meal)
    {
        $this->deleteImg($meal);
        $meal->delete();
    }
}
