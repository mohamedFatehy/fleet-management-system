<?php

namespace App\Http\Services;

use Illuminate\Support\Collection;

interface CitiesServiceInterface
{
    public function getAll(): Collection;
}
