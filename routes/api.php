<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ObatController;
use App\Http\Controllers\PemberianObatController;

// API untuk Obat (pengecekan & pemberian)
Route::prefix('obats')->group(function () {
    Route::get('/', [PemberianObatController::class, 'index']);
    Route::get('/{id}', [PemberianObatController::class, 'show']);
    Route::post('/', [PemberianObatController::class, 'store']);
    Route::put('/{id}', [PemberianObatController::class, 'update']);
    Route::delete('/{id}', [PemberianObatController::class, 'destroy']);
});
