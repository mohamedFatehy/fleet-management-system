<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(BussesSeeder::class);
        $this->call(TripSeeder::class);
    }
}
