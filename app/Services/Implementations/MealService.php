<?php
namespace App\Services\Implementations;

use App\Http\Requests\Mealsrequest;
use App\Models\Meal;
use App\Repositories\Interfaces\MealInterface;
use App\Services\Interfaces\MealServiceInterface;

class MealService implements MealServiceInterface
{
    public function __construct(public MealInterface $repository)
    {

    }
    public function all()
    {
        return $this->repository->all();
    }
    public function store(Mealsrequest $request)
    {
        return $this->repository->store($request);
    }
    public function update(Mealsrequest $request, Meal $meal)
    {
        return $this->repository->update($request, $meal);

    }
    public function delete(Meal $meal)
    {
        return $this->repository->delete($meal);
    }
    public function allorders(){
        return $this->repository->allorders();

    }

}