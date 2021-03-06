<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * Build success response
     * @param string|array $data
     * @param int @code
     * @return Illuminate\Http\jsonResponse
     */
    public function successResponse($data, $message = null, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data, 'message' => $message], $code);
    }

    /**
     * Build error response
     * @param string|array $data
     * @param int @code
     * @return Illuminate\Http\jsonResponse
     */
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}
