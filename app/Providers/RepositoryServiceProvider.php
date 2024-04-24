<?php

namespace App\Providers;

use App\Repositories\Implementations\ArticleRepository;
use App\Repositories\Implementations\MealClientRepository;
use App\Repositories\Implementations\MealRepository;
use App\Repositories\Implementations\RoomClientRepository;
use App\Repositories\Implementations\RoomRepository;
use App\Repositories\Implementations\StudentRepository;
use App\Repositories\Interfaces\ArticleInterface;
use App\Repositories\Interfaces\MealClientInterface;
use App\Repositories\Interfaces\MealInterface;
use App\Repositories\Interfaces\RoomClientInterface;
use App\Repositories\Interfaces\RoomInterface;
use App\Repositories\Interfaces\StudentInterface;
use App\Services\Implementations\MealClientService;
use App\Services\Interfaces\MealClientServiceInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        app()->bind(ArticleInterface::class,ArticleRepository::class);
        app()->bind(MealClientInterface::class, MealClientRepository::class);
        app()->bind(MealInterface::class, MealRepository::class);
        app()->bind(RoomInterface::class, RoomRepository::class);
        app()->bind(StudentInterface::class, StudentRepository::class);
        app()->bind(RoomClientInterface::class,RoomClientRepository::class);
    }
}
