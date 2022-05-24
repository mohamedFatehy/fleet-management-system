<?php

namespace Database\Seeders;

use App\Models\TripCrossOver;
use App\Models\Trips;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    public array $trips = [
        [
            'name' => 'Cairo-Asyut trip',
            'stations' => [
                6,  // cairo
                9,  // Faiyoum
                16, // Minya
                13  // Asyut
            ],
            'price' => 90,
            'busId' => 1
        ],
        [
            'name' => 'Cairo-Ismalia trip',
            'stations' => [
                6,  // cairo
                7,  // Dakahlia
                23, // Sharkia
                12  // ismalia
            ],
            'price' => 40,
            'busId' => 2
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->trips as $key => $trip) {

            // create trip
            $newTrip = Trips::create([
                'bus_id' => $trip['busId'],
                'price' => $trip['price'],
                'start_date' => Carbon::now()->addWeeks(++$key),
                'title' => $trip['name']
            ]);

            for ($stationIndex = 0, $stationIndexMax = count($trip['stations']); $stationIndex < $stationIndexMax; $stationIndex++) {
                TripCrossOver::create([
                    'city_id' => $trip['stations'][$stationIndex],
                    'trip_id' => $newTrip->trip_id,
                    'order' => $stationIndex + 1
                ]);
            }
        }
    }
}
