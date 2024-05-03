<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\StatisticsServiceInterface;
use Illuminate\Http\Request;

class Statistics extends Controller
{
    public function __construct(public StatisticsServiceInterface $service){
    }
    public function index(){
        return view('dashboard.index');
    }

}
