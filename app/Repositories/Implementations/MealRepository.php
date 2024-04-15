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
        return Meal::paginate(2);
    }

    public function store(Mealsrequest $request)
    {
        $mealData = $request->only('name', 'description', 'price');
        $meal = Meal::create($mealData);
        $this->storeImg($request->file('image'), $meal);
        return $meal;
    }

    public function update(Mealsrequest $request, Meal $meal)
    {
        $mealData = $request->all();
        if ($request->hasFile('image')) {
            $this->updateImg($request->file('image'), $meal);
        }
        $meal->update($mealData);
        // $meal->save();
        // dd($mealData);
        return $meal;
    }

    public function delete(Meal $meal)
    {
        $mealData = Meal::find($meal->id);
        $this->deleteImg($meal);
        $mealData->delete();
    }
}
