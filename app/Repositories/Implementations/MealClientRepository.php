<?php
namespace App\Repositories\Implementations;

use App\Http\Requests\FeedbackStoreRequest;
use App\Models\Commande;
use App\Models\favorite;
use App\Models\Feedback;
use App\Models\Meal;
use App\Models\Student;
use App\Repositories\Interfaces\MealClientInterface;
use Illuminate\Http\Request;

class MealClientRepository implements MealClientInterface
{
    public function all()
    {
        return Meal::paginate(3);
    }
    public function show(Meal $meal)
    {
        return $meal;
    }
    public function orderMeal(Request $request)
    {
        $request->validate([
            'meal_id' => 'required|exists:meals,id',
        ]);
        $studentId = auth()->user()->students->id;
        $student = Student::findOrFail($studentId);
        $meal_Id = $request->meal_id;
        return $student->commandemeal()->attach($meal_Id);


    }
    public function addFavorit(Request $request)
    {
        $request->validate([
            'meal_id' => 'required|exists:meals,id',
        ]);

        $studentId = auth()->user()->students->id;

        $mealId = $request->meal_id;
        // dd($mealId);
        $student = Student::findOrFail($studentId);
        //    dd($student);
        if (!$student->meal()->where('meal_id', $mealId)->exists()) {
            return $student->meal()->attach($mealId);
        } else {
            return $student->meal()->detach($mealId);

        }
    }

    public function allFavorite()
    {
        $studentId = auth()->user()->students->id;

        $student = Student::findOrFail($studentId);

        $favorites = $student->meal()->paginate(3);
        // dd($favorites);
        return $favorites;
    }

    public function feedbackStore(FeedbackStoreRequest $request)
    {
        $validatedData = $request->validated();
        $studentId = auth()->user()->students->id;
        $meal = Meal::findOrFail($validatedData['meal_id']);
        $meal->feedbackbystudent()->attach($studentId, [
            'starCount' => $validatedData['starCount'],
            'comment' => $validatedData['comment'],
        ]);
    }

    public function feedbackDelete(Meal $meal)
    {
        // dd($feedback);
        $studentId = auth()->user()->students->id;
        $res=$meal->load('feedbackbystudent');
        // dd($res);
        $meal->feedbackbystudent()->detach($studentId);
    }
    public function getallorder(){
        $studentId = auth()->user()->students->id;

        $student = Student::findOrFail($studentId);

        $orders = $student->commandemeal()->paginate(3);
        // dd($orders);
        return $orders;
    }


}