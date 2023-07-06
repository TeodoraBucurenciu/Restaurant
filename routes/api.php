<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdministrareController;
use App\Http\Controllers\Api\ComandaController;
use App\Http\Controllers\Api\ProduseController;
use App\Http\Controllers\Api\ComenziController;
use App\Http\Controllers\Api\MasaController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('administrare', [AdministrareController::class, 'index']);

Route::get('produse', [ProduseController::class, 'index']);

Route::get('comanda', [ComandaController::class, 'index']);
Route::post('comanda', [ComandaController::class, 'store']);
Route::put('comanda', [ComandaController::class, 'update']);


Route::get('comenzi', [ComenziController::class, 'index']);
Route::post('comenzi', [ComenziController::class, 'store']);

Route::get('masa', [MasaController::class, 'index']);


