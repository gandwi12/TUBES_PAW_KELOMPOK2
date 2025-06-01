<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemberianObatController;

Route::resource('obats', PemberianObatController::class);
Route::get('/', [PemberianObatController::class, 'index'])->name('obats.index');
Route::get('/{id}', [PemberianObatController::class, 'show']);
Route::post('/', [PemberianObatController::class, 'store']);
Route::put('/{id}', [PemberianObatController::class, 'update']);
Route::delete('/{id}', [PemberianObatController::class, 'destroy']);

