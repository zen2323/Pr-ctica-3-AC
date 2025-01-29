<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RestaurantesController;
use App\Http\Controllers\DetallesRestauranteController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\PlatosController;
use App\Http\Controllers\ReservasController;


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

// Ruta de ejemplo para verificar que la API funciona
Route::get('/status', function () {
    return response()->json(['status' => 'API is working']);
});

Route::apiResource('cliente', ClienteController::class);
Route::apiResource('restaurante', RestaurantesController::class);
Route::apiResource('detalle-restaurante', DetallesRestauranteController::class);
Route::apiResource('menu', MenusController::class);
Route::apiResource('plato', PlatosController::class);
Route::apiResource('reserva', ReservasController::class);
