<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
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

// Clientes
Route::apiResource('clientes', ClientesController::class);

// Restaurantes
Route::apiResource('restaurantes', RestaurantesController::class);

// Detalles de Restaurante
Route::apiResource('detalles-restaurante', DetallesRestauranteController::class);

// Menús
Route::apiResource('menus', MenusController::class);

// Platos
Route::apiResource('platos', PlatosController::class);

// Reservas
Route::apiResource('reservas', ReservasController::class);
