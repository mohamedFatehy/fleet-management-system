<?php

namespace App\Http\Repositories;

use App\Models\City;
use Illuminate\Support\Collection;


class CitiesRepository implements CitiesRepositoryInterface
{

    /**
     * @return Collection
     */
    public function get(): Collection
    {
        return City::all();
    }
}
