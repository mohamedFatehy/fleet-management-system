<?php

namespace Tests\Feature;

use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class CitiesApiTest extends TestCase
{
    private string $baseUrl = 'api/cities/all';

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_cities_returns_a_successful_response()
    {
        $this->actingAs($this->user)
            ->get($this->baseUrl)
            ->assertStatus(200)
            ->assertJsonStructure([
                'success',
                'data' => [
                    [
                        'city_id',
                        'city_name'
                    ]
                ]
            ]);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_cities_api_unautorized_without_logged_user()
    {
        $this->get($this->baseUrl)
            ->assertStatus(401);
    }

}
