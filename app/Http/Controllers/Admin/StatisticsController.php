<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\StatisticsServiceInterface;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function __construct(public StatisticsServiceInterface $service){
    }
  
    public function allorders(){
        return $this->service->allorders();
        
    }

}
