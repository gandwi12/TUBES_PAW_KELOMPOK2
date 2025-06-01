<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\JadwalApiController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\API\PemeriksaanController;
use App\Http\Controllers\Api\BookingAPIController;

Route::get('/jadwal', [JadwalDokterController::class, 'index']);
Route::get('/jadwal/{id}', [JadwalDokterController::class, 'show']);
Route::get('jadwals', [JadwalDokterController::class, 'index']);
Route::get('/jadwals', [JadwalApiController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/riwayat-kunjungan', [PemeriksaanControllerController::class, 'index']); // Mahasiswa
    Route::get('/riwayat-kunjungan/{id}', [PemeriksaanControllerController::class, 'show']); // Mahasiswa
    Route::put('/diagnosa/{id}', [PemeriksaanControllerController::class, 'update']); // Dokter
});

Route::get('/booking', [BookingAPIController::class, 'index']);
Route::get('/booking/{id}', [BookingAPIController::class, 'show']);