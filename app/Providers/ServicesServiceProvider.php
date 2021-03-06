<?php

namespace App\Providers;


use App\Http\Services\AuthService;
use App\Http\Services\AuthServiceInterface;
use App\Http\Services\CitiesService;
use App\Http\Services\CitiesServiceInterface;
use App\Http\Services\TripService;
use App\Http\Services\TripServiceInterface;
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
        $this->app->bind(CitiesServiceInterface::class, CitiesService::class);
        $this->app->bind(TripServiceInterface::class, TripService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
