<?php

namespace App\Http\Repositories;


use App\Models\Reservations;
use Illuminate\Support\Collection;

class ReservationRepository implements ReservationRepositoryInterface
{

    /**
     * @param int $tripId
     * @param int $seatId
     * @return Collection
     */
    public function getTripReservations(int $tripId, int $seatId): Collection
    {
        return Reservations::where([
            'trip_id' => $tripId,
            'seat_id' => $seatId,
        ])->select('from_city', 'to_city')->get();
    }
}
