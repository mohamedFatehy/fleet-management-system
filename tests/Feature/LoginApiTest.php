<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginApiTest extends TestCase
{
    private string $baseUrl = '/api/login';
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $data = [
            'email' => 'test1@test.com', // valid email
            'password' => 'password'
        ];
        $response = $this->post($this->baseUrl, $data);
        $response->assertOk()
            ->assertJsonStructure([
            'success',
            'data' => [
                'token',
                'name'
            ],
            'message'
        ]);
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_validation_worong_email_response()
    {
        $data = [
            'email' => 'tegrtgbrt', // not valid email
            'password' => 'teg'
        ];
        $response = $this->post($this->baseUrl, $data);
        $response->assertStatus(400);
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_validation_response()
    {
        $response = $this->post($this->baseUrl);
        $response->assertStatus(400);
    }
}
