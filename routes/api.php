<?php
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/getAuthUser', [AuthController::class, 'getAuthUser']);

});

