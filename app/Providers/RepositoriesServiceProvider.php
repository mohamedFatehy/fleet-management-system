<?php

namespace App\Providers;

use App\Http\Repositories\CitiesRepository;
use App\Http\Repositories\CitiesRepositoryInterface;
use App\Http\Repositories\ReservationRepository;
use App\Http\Repositories\ReservationRepositoryInterface;
use App\Http\Repositories\TripRepository;
use App\Http\Repositories\TripRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CitiesRepositoryInterface::class, CitiesRepository::class);
        $this->app->bind(TripRepositoryInterface::class, TripRepository::class);
        $this->app->bind(ReservationRepositoryInterface::class, ReservationRepository::class);
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
