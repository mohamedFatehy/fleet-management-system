<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\BusSeat;
use Illuminate\Database\Seeder;

class BussesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $busesCount = 2;
        $defaultBusSeatsCount = 12;
        for ($bus = 1; $bus <= $busesCount; $bus++) {
            $busRecord =Bus::create([
                'seats_count' => $defaultBusSeatsCount
            ]);
            for ($seat = 1; $seat <= $defaultBusSeatsCount; $seat++) {
                BusSeat::create([
                    'bus_id' => $busRecord->bus_id,
                    'seat_index' => $seat
                ]);
            }
        }
    }
}
