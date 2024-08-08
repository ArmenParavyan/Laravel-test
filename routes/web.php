<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/mywelcome', [WelcomeController::class, 'index']); 



Route::group(['prefix' => 'books'], function () {
    
    Route::get('/', [BookController::class, 'index']);
    Route::get('/create', [BookController::class, 'create']);

});

Route::get('/customer', [CustomerController::class, 'index']);

Route::get('/signup', [AuthController::class, 'viewSignUp']);


