<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalDokterController;

Route::resource('jadwals', JadwalDokterController::class); 
Route::get('/', [JadwalDokterController::class, 'index']);
Route::get('/jadwals', [JadwalDokterController::class, 'index'])->name('jadwals.index');
Route::get('/jadwals/create', [JadwalDokterController::class, 'create'])->name('jadwals.create');
Route::post('/jadwals', [JadwalDokterController::class, 'store'])->name('jadwals.store');

