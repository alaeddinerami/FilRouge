<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Mealsrequest;
use App\Models\Meal;
use App\Models\Student;
use App\Repositories\Interfaces\MealInterface;
use App\Services\Interfaces\MealServiceInterface;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MealController extends Controller
{
    use ImageUpload;


    public function __construct(public MealServiceInterface $service)
    {
    }
    public function index()
    {
        $meals = $this->service->all();
        return view('dashboard.cafeteria.index', compact('meals'));

    }

    public function allorders()
    {
        $orders = $this->service->allorders();
        
        return view('dashboard.index', compact('orders'));
    }
    public function store(Mealsrequest $request)
    {

        $meal = $this->service->store($request);
        // dd($meal);
        return redirect()->back()->with([
            'message' => 'Meal created successfully!',
            'operationSuccessful' => $this->operationSuccessful = true,
        ]);
    }

    public function update(Mealsrequest $request, Meal $meal)
    {
        $this->service->update($request, $meal);

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
        $this->service->delete($meal);

        return redirect()->back()->with([
            'message' => 'Meal deleted successfully!',
            'operationSuccessful' => true,
        ]);
    }
}
