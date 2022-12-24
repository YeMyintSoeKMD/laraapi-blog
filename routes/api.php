<?php

use App\Http\Controllers\Api\{AuthController, AppController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function(){
    Route::post('logout', [AuthController::class, 'logout']);

    Route::get('users', [AppController::class, 'getUsers']);
    Route::get('profile', [AppController::class, 'getProfile']);

    Route::get('categories', [AppController::class, 'getCategories']);
});