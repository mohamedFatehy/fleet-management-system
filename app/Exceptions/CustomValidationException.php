<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;

class CustomValidationException extends BaseException
{
    public function render($request)
    {
        $messageDecoded = json_decode($this->getMessage());
        $errors = $messageDecoded ?: [$this->getMessage()];
        return $this->handleError('validation error', $errors, Response::HTTP_BAD_REQUEST);
    }
}
