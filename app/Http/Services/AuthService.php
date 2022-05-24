<?php

namespace App\Http\Services;

use App\Exceptions\CustomValidationException;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthServiceInterface
{

    /**
     * @param string $email
     * @param string $password
     * @return array
     * @throws CustomValidationException
     */
    public function login(string $email, string $password): array
    {

        if (Auth::attempt(['email' =>$email, 'password' =>$password])) {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('jumia-task')->plainTextToken;
            $success['name'] = $auth->name;

            return $success;
        }

        throw new CustomValidationException('wrong credentials',400);
    }
}
