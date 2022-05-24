<?php

namespace App\Providers;

use App\Http\Repositories\CitiesRepository;
use App\Http\Repositories\CitiesRepositoryInterface;
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
