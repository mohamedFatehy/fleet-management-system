<?php

namespace App\Exceptions;

use App\Http\Helpers\CustomResponses;
use Exception;

class BaseException extends Exception
{
    use CustomResponses;
}
