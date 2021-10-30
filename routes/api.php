<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscribersController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/subscriber/status',[SubscribersController::class, 'verify_subscriber_status']);
Route::post('/subscriber/dectation',[SubscribersController::class, 'msisdm_dectation']);
Route::post('/subscriber/charge/request',[SubscribersController::class, 'subscriber_charge_request']);
Route::post('/subscriber/deactivation/request',[SubscribersController::class, 'deactivate_subscriber_request']);
