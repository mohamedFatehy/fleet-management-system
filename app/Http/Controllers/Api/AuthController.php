<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Requests\UserLoginRequest;
use App\Http\Services\AuthServiceInterface;


class AuthController extends ApiController
{
    private AuthServiceInterface $authService;

    public function __construct(AuthServiceInterface $authService)
    {
        $this->authService = $authService;
    }

    public function login(UserLoginRequest $request)
    {
        $success = $this->authService->login($request->get('email'), $request->get('password'));
        return $this->handleResponse($success);
    }
}
