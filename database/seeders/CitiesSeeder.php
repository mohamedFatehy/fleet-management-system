<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert(
            [
                ['city_name' => 'Alexandria'],
                ['city_name' => 'Aswan'],
                ['city_name' => 'Asyut'],
                ['city_name' => 'Beheira'],
                ['city_name' => 'Beni Suef'],
                ['city_name' => 'Cairo'],
                ['city_name' => 'Dakahlia'],
                ['city_name' => 'Damitta'],
                ['city_name' => 'Faiyoum'],
                ['city_name' => 'Gharbia'],
                ['city_name' => 'Giza'],
                ['city_name' => 'Ismalia'],
                ['city_name' => 'Kafr elsheikh'],
                ['city_name' => 'Luxor'],
                ['city_name' => 'Matruh'],
                ['city_name' => 'Minya'],
                ['city_name' => 'Munofia'],
                ['city_name' => 'New valley'],
                ['city_name' => 'North Sinai'],
                ['city_name' => 'Port said'],
                ['city_name' => 'Qualibia'],
                ['city_name' => 'Red sea'],
                ['city_name' => 'Sharkia'],
                ['city_name' => 'Suhag'],
                ['city_name' => 'South sinai'],
                ['city_name' => 'Suiz']
            ]
        );
    }
}
