<?php

namespace Tests\Feature;

use Tests\TestCase;

class BookSeatApiTest extends TestCase
{
    private string $baseUrl = 'api/trips/book';

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_api_unautorized_without_logged_user()
    {
        $this->post($this->baseUrl, [
            'from' => '6',
            'to' => '13',
            'tripId' => 1,
            'seatId' => 8
        ])->assertStatus(401);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_api_returns_a_validation_response()
    {
        $this->actingAs($this->user)
            ->post($this->baseUrl)
            ->assertStatus(400);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_api_returns_a_success_response()
    {
        $response = $this->actingAs($this->user)->post($this->baseUrl, [
            'from' => '6',
            'to' => '13',
            'tripId' => 1,
            'seatId' => 2
        ]);
        $response->assertOk();
        $response->assertJsonStructure(
            [
                'success',
                'data',
                'message'
            ]
        );

        // first time should success but second time should fail because the slot should be reserved
        $response2 = $this->actingAs($this->user)->post($this->baseUrl, [
            'from' => '6',
            'to' => '13',
            'tripId' => 1,
            'seatId' => 2
        ]);
        $response2->assertStatus(400);
    }
}
