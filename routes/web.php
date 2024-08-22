<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::group(['middleware' => 'coustom'], function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index']);

});

Route::get('/customer', [CustomerController::class, 'index']);

Route::get('/signup', [AuthController::class, 'viewSignUp']);

Route::get('/signin', [AuthController::class, 'viewSignIn']);

Route::get('/create-customer', [CustomerController::class, 'create']);

Route::get('/update-customer', [CustomerController::class, 'update']);

Route::post('/create-customer', [CustomerController::class, 'createCustomer'])->name('customer.create');

Route::post('/update-customer', [CustomerController::class, 'updateCustomer'])->name('customer.update');

Route::get('/customer-edit/{id}', [CustomerController::class, 'editCustomer'])->name('customer.edit');




