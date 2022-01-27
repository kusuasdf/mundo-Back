<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regionController;
use App\Http\Controllers\provinciaController;
use App\Http\Controllers\ciudadController;
use App\Http\Controllers\calleController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//rutas
Route::apiResource('regiones',regionController::class);
Route::apiResource('provincias',provinciaController::class);
Route::apiResource('ciudades',ciudadController::class);
Route::apiResource('calles',calleController::class);