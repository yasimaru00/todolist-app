<?php

namespace App\Traits;

trait ApiResponse
{
    protected function apiSuccess($data, $code = 200, $message = null){
        return response()->json([
            'data' => $data,
            'message' => $message
        ], $code);
    }

    protected function apiError($errors ,$message = null, $code){
        return response()->json([
            'errors' => $errors,
            'message' => $message
        ], $code);
    }
}


?>