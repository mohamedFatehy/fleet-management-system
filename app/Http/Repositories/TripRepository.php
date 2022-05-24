<?php

namespace App\Http\Repositories;


use App\Models\Trips;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class TripRepository implements TripRepositoryInterface
{

    /**
     * @param int $from
     * @param int $to
     * @return Collection
     */
    public function getAvailableTripsByCities(int $from, int $to): Collection
    {
        return Trips::with(['seats' => function ($q) {
            $q->select('seat_id', 'bus_id', 'seat_index as seat_number');
        }])->with('crossovers')
            ->whereIn('trip_id',
                DB::table('trip_cross_overs as trip_cross_overs_from')
                    ->join('trip_cross_overs as trip_cross_overs_to', 'trip_cross_overs_from.trip_id', 'trip_cross_overs_to.trip_id')
                    ->where('trip_cross_overs_from.city_id', $from)
                    ->where('trip_cross_overs_to.city_id', $to)
                    ->whereRaw('trip_cross_overs_from.order < trip_cross_overs_to.order')
                    ->pluck('trip_cross_overs_from.trip_id')->toArray()
            )
            ->select([
                'trips.trip_id',
                'trips.title',
                'trips.bus_id',
                'trips.price',
                'trips.start_date',
            ])
            ->get();
    }

}
