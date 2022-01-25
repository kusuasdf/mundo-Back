<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pt_regionController;
use App\Http\Controllers\pt_provinciaController;
use App\Http\Controllers\pt_ciudadController;
use App\Http\Controllers\pt_calleController;

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
Route::apiResource('regiones',pt_regionController::class);
Route::apiResource('provincias',pt_provinciaController::class);
Route::apiResource('ciudades',pt_ciudadController::class);
Route::apiResource('calles',pt_calleController::class);