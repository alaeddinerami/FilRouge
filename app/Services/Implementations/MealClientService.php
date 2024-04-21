<?php 
namespace App\Services\Implementations;
use App\Models\Meal;
use App\Repositories\Interfaces\MealClientInterface;
use App\Repositories\Interfaces\MealInterface;
use App\Services\Interfaces\MealClientServiceInterface;
use Illuminate\Http\Request;

class MealClientService implements MealClientServiceInterface{

    public function __construct(public MealClientInterface $repository){

    }
    public function all(){
        return $this->repository->all();
    }
    public function show(Meal $meal){
        return $this->repository->show($meal);
    }
    public function orderMeal(Request $request){
        return $this->repository->orderMeal($request);
    }
    public function addFavorit(Request $request){
        return $this->repository->addFavorit($request);

    }
    public function allFavorite(){
        return $this->repository->allFavorite();

    }
}