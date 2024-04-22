<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackStoreRequest;
use App\Models\Feedback;
use App\Models\Meal;
use App\Repositories\Implementations\service;
use App\Repositories\Interfaces\MealClientInterface;
use App\Services\Implementations\MealService;
use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function __construct(public MealClientInterface $service ){
    }
    public function index()
    {
        $meals = $this->service->all();
        return view('client.cafeteria.index',compact('meals'));

    }

    public function store(Request $request)
    {
        $this->service->orderMeal($request);
        return redirect()->back()->with([
            'message' => 'Your Order passed successfully!',
            'operationSuccessful' => $this->operationSuccessful = true,
        ]);
    }

    public function addFavorit(Request $request){
        $message = $this->service->addFavorit($request);
        return redirect()->back()->with([
            'message' => $message,
            'operationSuccessful' => $this->operationSuccessful = true,
        ]);
    }

    public function allFavorite(){
        $favorites=  $this ->service->allFavorite();
        return view('client.cafeteria.favorite',compact('favorites'));
    }
    /**
     * Display the specified resource.
     */
    public function show(Meal $meal)
    {
        $meal = $this->service->show($meal);
        $meal->load('feedbacks.student.users') ;
        $averageStars = $meal->feedbacks->avg('starCount');
        // dd($averageStars);
        return view('client.cafeteria.exploreMeal',compact('meal' ,'averageStars'));

    }
    public function feedbackStore(FeedbackStoreRequest $request){
        $this->service->feedbackStore($request);
        return redirect()->back()->with([
            'message' => 'Your Order passed successfully!',
            'operationSuccessful' => $this->operationSuccessful = true,
        ]);
    }
    public function feedbackDelete(Feedback $feedback){
        $this->service->feedbackDelete($feedback);
        return redirect()->back();
    }

}
