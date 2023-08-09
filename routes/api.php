<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompradorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
#Rutas para el usuario
Route::get('/usuarios',[UsuarioController::class, 'index']);



# Ruras para comprador
Route::get('/comprador', [CompradorController::class, 'index']);
Route::post('/comprador', [CompradorController::class, 'store']);
Route::get('/comprador/{id}', [CompradorController::class, 'show']);
Route::put('/comprador/{id}', [CompradorController::class, 'update']);
Route::delete('/comprador/{id}', [CompradorController::class, 'destroy']);

# Rutas para comprador

Route::get('/producto',[ProductoController::class, 'index']);
Route::get('/producto/{id}',[ProductoController::class, 'show']);

