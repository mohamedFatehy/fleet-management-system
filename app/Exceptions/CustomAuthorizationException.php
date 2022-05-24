<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;

class CustomAuthorizationException extends BaseException
{
    public function render()
    {
        return $this->handleError('Not Authorized', [], Response::HTTP_UNAUTHORIZED);
    }
}
