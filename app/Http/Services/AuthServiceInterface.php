<?php

namespace App\Http\Services;

use Illuminate\Support\Collection;

interface AuthServiceInterface
{
    public function login(string $email, string $password): array;
}
