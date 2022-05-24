<?php

namespace Tests;

use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use DatabaseTransactions;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = UserFactory::new()->create([
            'name' => 'Test1 User',
            'email' => ("test" . random_int(1111,9999) ."@test.com"),
        ]);
    }
}
