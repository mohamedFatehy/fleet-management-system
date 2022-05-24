<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CitiesController;
use App\Http\Controllers\Api\TripsController;
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

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('cities/all',[CitiesController::class, 'get']);

    Route::group(['prefix' => 'trips'], function () {
        Route::post('/book', [TripsController::class, 'bookSeat']);
        Route::get('/available', [TripsController::class, 'getAvailableTrips']);
    });
});
