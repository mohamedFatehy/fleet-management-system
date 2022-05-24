<?php

namespace App\Http\Repositories;


use App\Models\Reservations;
use App\Models\Trips;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ReservationRepository implements ReservationRepositoryInterface
{

    /**
     * @param array $data
     * @return void
     */
    public function create(array $data): void
    {
        Reservations::create($data);
    }

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
