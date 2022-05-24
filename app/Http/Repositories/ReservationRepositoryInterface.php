<?php

namespace App\Http\Repositories;

use Illuminate\Support\Collection;

interface ReservationRepositoryInterface
{
    /**
     * @param array $data
     * @return void
     */
    public function create(array $data): void;

    /**
     * @param int $tripId
     * @param int $seatId
     * @return Collection
     */
    public function getTripReservations(int $tripId, int $seatId): Collection;
}
