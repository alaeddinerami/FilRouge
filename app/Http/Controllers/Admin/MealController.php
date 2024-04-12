<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Mealsrequest;
use App\Models\Meal;
use App\Repositories\Interfaces\MealInterface;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MealController extends Controller
{
    use ImageUpload;
    protected $mealRepository;

    public function __construct(MealInterface $mealRepository)
    {
        $this->mealRepository = $mealRepository;
    }
    public function index()
    {
        $meals = $this->mealRepository->all();
        return view('dashboard.cafeteria.index', compact('meals'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Mealsrequest $request)
    {

        $mealData = $request->only('name', 'description', 'price');

        $meal = $this->mealRepository->create($mealData);
        $this->storeImg($request->file('image'), $meal);
        // dd($meal);
        return redirect()->back()->with([
            'message' => 'Meal created successfully!',
            'operationSuccessful' => $this->operationSuccessful = true,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Meal $meal)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Mealsrequest $request, Meal $meal)
    {
        $mealData = $request->all(); // Get all request data

       
        $this->mealRepository->update($mealData, $meal);
    
        if ($request->hasFile('image')) {
            $this->updateImg($request->file('image'), $meal);
        }
    
        return redirect()->back()->with([
            'message' => 'Meal updated successfully!',
            'operationSuccessful' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meal $meal)
    {
        $this->deleteImg($meal);

       
        $this->mealRepository->delete($meal);

        return redirect()->back()->with([
            'message' => 'Meal deleted successfully!',
            'operationSuccessful' => true,
        ]);
    
    }
}
