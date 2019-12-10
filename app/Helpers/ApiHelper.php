<?php

use Illuminate\Http\Response;

function apiResponse($returnCode, $data, $message = '')
{
    return response()->json([
        'status' => [
            'code' => $returnCode,
            'message_type' => $returnCode == Response::HTTP_OK ? 'success' : 'error',
            'message' => $message,
        ],
        'response' => $data,
    ], Response::HTTP_OK);
}

function apiError($apiCodeKey, $message = '', $data = [])
{
    $returnCode = $apiCodeKey;
    $message = $message != '' ? $message : 'Error';

    return apiResponse($returnCode, $data, $message);
}

function apiSuccess($data, $message = '')
{
    return apiResponse(Response::HTTP_OK, $data, $message);
}
