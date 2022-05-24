<?php

namespace App\Http\Repositories;

use Illuminate\Support\Collection;

interface ReservationRepositoryInterface
{
    /**
     * @param int $tripId
     * @param int $seatId
     * @return Collection
     */
    public function getTripReservations(int $tripId, int $seatId): Collection;
}
