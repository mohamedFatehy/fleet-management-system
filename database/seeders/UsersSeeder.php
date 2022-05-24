<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Test1 User',
            'email' => 'test1@test.com',
        ]);

        User::factory()->create([
            'name' => 'Test2 User',
            'email' => 'test2@test.com',
        ]);
    }
}
