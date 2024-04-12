<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            'App\Repositories\Interfaces\MealInterface',
            'App\Repositories\Implementations\MealRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\RoomInterface',
            'App\Repositories\Implementations\RoomRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\StudentInterface',
            'App\Repositories\Implementations\StudentRepository'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
