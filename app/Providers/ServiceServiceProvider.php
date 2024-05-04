<?php

namespace App\Providers;

use App\Services\Implementations\ArticleService;
use App\Services\Implementations\MealClientService;
use App\Services\Implementations\MealService;
use App\Services\Implementations\RoomClientService;
use App\Services\Implementations\RoomService;
use App\Services\Implementations\StatisticsService;
use App\Services\Implementations\StudentService;
use App\Services\Interfaces\ArticleServiceInterface;
use App\Services\Interfaces\MealClientServiceInterface;
use App\Services\Interfaces\MealServiceInterface;
use App\Services\Interfaces\RoomClientServiceInterface;
use App\Services\Interfaces\RoomServiceInterface;
use App\Services\Interfaces\StatisticsServiceInterface;
use App\Services\Interfaces\StudentServiceInterface;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        app()->bind(ArticleServiceInterface::class, ArticleService::class);
        app()->bind(MealClientServiceInterface::class, MealClientService::class);
        app()->bind(MealServiceInterface::class, MealService::class);
        app()->bind(RoomServiceInterface::class, RoomService::class);
        app()->bind(StudentServiceInterface::class, StudentService::class);
        app()->bind(RoomClientServiceInterface::class, RoomClientService::class);
        app()->bind(StatisticsServiceInterface::class,StatisticsService::class);
    }
}
