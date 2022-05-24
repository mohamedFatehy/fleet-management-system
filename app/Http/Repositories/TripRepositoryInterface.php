<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface TripRepositoryInterface
{
    public function getAvailableTripsByCities(int $from, int $to): Collection;
}
