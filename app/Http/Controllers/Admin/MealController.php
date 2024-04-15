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
       

        $meal = $this->mealRepository->store($request);
        
      
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
        

            $this->mealRepository->update($request, $meal);

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
       
        $this->mealRepository->delete($meal);

        return redirect()->back()->with([
            'message' => 'Meal deleted successfully!',
            'operationSuccessful' => true,
        ]);

    }
}
