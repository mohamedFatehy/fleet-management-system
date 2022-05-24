<?php

namespace App\Http\Repositories;

use Illuminate\Support\Collection;

interface CitiesRepositoryInterface
{

    /**
     * @return Collection
     */
    public function get(): Collection;
}
