<?php
namespace App\Repositories\Implementations;

use App\Models\Commande;
use App\Models\favorite;
use App\Models\Meal;
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

        $order = Commande::create([
            'student_id' => $studentId,
            'meal_id' => $request->meal_id,
            'status' => 0, 
        ]);


    }
    public function addFavorit(Request $request){
        $request->validate([
            'meal_id' => 'required|exists:meals,id',
        ]);
        
        $studentId = auth()->user()->students->id;
        $favourite = Favorite::where('student_id', $studentId)->where('meal_id', $request->meal_id)->first();;

        if($favourite){
            $favourite->delete();
            return 'adnijdb';
        }else{
            Favorite::create([
                'student_id' => $studentId,
                'meal_id' => $request->meal_id,
                ]);
                return  'add sucdcsd';
        }
    }

    public function allFavorite(){
        return Favorite::paginate(4);
    }

}