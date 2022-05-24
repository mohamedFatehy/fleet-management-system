<?php

namespace App\Http\Helpers;

trait CustomResponses
{
    public function handleResponse($result, string $msg = 'success')
    {
        $res = [
            'success' => true,
            'message' => $msg,
            'data' => $result,
        ];
        return response()->json($res);
    }

    public function handleError(string $error, array $errorMsg = [], int $code = 404)
    {
        $res = [
            'success' => false,
            'message' => $error,
            'data' => $errorMsg
        ];

        return response()->json($res, $code);
    }
}
