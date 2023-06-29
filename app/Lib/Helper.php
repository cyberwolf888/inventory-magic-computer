<?php

function createJsonResponse($data, $code = 200, $message = null, $isSuccess = true): \Illuminate\Http\JsonResponse
{
    $response = [
        'success' => $isSuccess,
        'code' => $code,
        'message' => $message,
        'data' => $data,
    ];

    return response()->json($response, $code);
}
