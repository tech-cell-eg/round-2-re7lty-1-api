<?php

namespace App\Traits;

trait ApiResponseTrait
{
    /**
     * Success response
     */
    public function successResponse($data = [], $message = "Success", $statusCode = 200)
    {
        return response()->json([
            'status'  => true,
            'message' => $message,
            'data'    => $data,
        ], $statusCode);
    }

    /**
     * Error response
     */
    public function errorResponse($message = "Error", $statusCode = 400, $errors = [])
    {
        return response()->json([
            'status'  => false,
            'message' => $message,
            'errors'  => $errors,
        ], $statusCode);
    }
}
