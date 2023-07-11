<?php

use App\Http\Controllers\Api\ItemComandaController;
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

Route::get('comenzi', [ComenziController::class, 'index']);
Route::post('comenzi', [ComenziController::class, 'store']);
Route::get('comenzi/{id}', [ComenziController::class, 'show']);
Route::get('comenzi/{id}/edit', [ComenziController::class, 'edit']);
Route::put('comenzi/{id}/update', [ComenziController::class, 'update']);
Route::delete('comenzi/{id}/delete', [ComenziController::class, 'destroy']);


Route::get('masa', [MasaController::class, 'index']);

Route::get('item_comanda', [ItemComandaController::class, 'index']);


