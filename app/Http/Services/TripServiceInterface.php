<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface TripServiceInterface
{
    public function getAvailableTrips(Request $request): Collection;

    public function bookSeat(Request $request): void;
}
