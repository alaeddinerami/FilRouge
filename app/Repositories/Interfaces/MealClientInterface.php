<?php

namespace App\Repositories\Interfaces;
use App\Http\Requests\FeedbackStoreRequest;
use App\Models\Feedback;
use App\Models\Meal;
use Illuminate\Http\Request;

interface MealClientInterface{
    public function all();
    public function show(Meal $meal);
    public function orderMeal(Request $request);
    public function addFavorit(Request $request);
    public function allFavorite();
    public function feedbackStore(FeedbackStoreRequest $request);
    public function feedbackDelete(Meal $meal);
    public function getallorder();


}