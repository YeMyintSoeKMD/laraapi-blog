<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // custom method
    public function successResponse($data = [], $message = 'success')
    {
        return response()->json(['data' => $data, 'message' => $message], 200);
    }

    public function unAuthorizedResponse($data = [], $message = 'fail')
    {
        return response()->json(['data' => $data, 'message' => $message], 401);
    }
}
