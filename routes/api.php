<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\JadwalApiController;
use App\Http\Controllers\JadwalDokterController;

Route::get('/jadwal', [JadwalDokterController::class, 'index']);
Route::get('/jadwal/{id}', [JadwalDokterController::class, 'show']);
Route::get('jadwals', [JadwalDokterController::class, 'index']);
Route::get('/jadwals', [JadwalApiController::class, 'index']);

