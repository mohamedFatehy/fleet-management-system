<?php

namespace Tests\Feature;

use Tests\TestCase;

class AvailableSeatsApiTest extends TestCase
{
    private string $baseUrl = 'api/trips/available';

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_api_returns_a_validation_response()
    {
        $this->actingAs($this->user)
            ->get($this->baseUrl)
            ->assertStatus(400);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_api_returns_a_success_response()
    {

        $response = $this->actingAs($this->user)->json('GET', $this->baseUrl, [
            'from' => '6',
            'to' => '13'
        ]);
        $response->assertOk()
            ->assertJsonStructure(
                [
                    'success',
                    'data' => [
                        [
                            'trip_id',
                            'title',
                            'bus_id',
                            'price',
                            'start_date',
                            'seats' => [
                                [
                                    'seat_id',
                                    'bus_id',
                                    'seat_number'
                                ]
                            ],
                            'crossovers' => [
                                [
                                    'city_id',
                                    'trip_id',
                                    'city_name',
                                    'order',
                                ]
                            ]
                        ]
                    ],
                    'message'
                ]
            );
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_api_unautorized_without_logged_user()
    {
        $this->get($this->baseUrl)
            ->assertStatus(401);
    }
}
