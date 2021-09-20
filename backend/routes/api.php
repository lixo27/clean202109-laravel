<?php

use Clean\Interfaces\Api\Http\Controllers\Customers\GetCustomerController;
use Clean\Interfaces\Api\Http\Controllers\Customers\GetCustomersController;
use Clean\Interfaces\Api\Http\Controllers\Customers\StoreCustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('customers', GetCustomersController::class);
Route::post('customers', StoreCustomerController::class);
Route::get('customers/{id}', GetCustomerController::class);
