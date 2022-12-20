<?php

namespace App\Http\Controllers\API;

class ResponseFormatter
{

    protected static $response = [
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => null
        ],
        'data' => null
    ];

    public static function success($data = null, $message = null)
    {
        // artinya dari parameter $message akan dikirimkan ke function response yang static
        // self:: karena function yang di atas itu sifatnya statik
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['meta']['code']);
    }


    public static function error($data = null, $message = null, $code = 400)
    {
        // artinya dari parameter $message akan dikirimkan ke function response yang static
        // self:: karena function yang di atas itu sifatnya statik
        self::$response['meta']['status'] = 'error';
        self::$response['meta']['code'] = $code;
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;
        

        return response()->json(self::$response, self::$response['meta']['code']);
    }

}