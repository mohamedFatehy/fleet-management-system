<?php

namespace App\Http\Middleware;

use App\Exceptions\CustomAuthorizationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{

    /**
     * @param $request
     * @param array $guards
     * @return void
     * @throws CustomAuthorizationException
     */
    protected function unauthenticated($request, array $guards)
    {
        throw new CustomAuthorizationException();
    }
}
