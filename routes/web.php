<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    SiswaController,
    MapelController,
    GuruController,
    KelasController,
    DashboardController
};

// Route Dashboard
Route::get('/', [DashboardController::class, 'index']);

// Route Siswa
Route::resource('/siswa', SiswaController::class);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'destroy']);

// Route Guru
Route::resource('/guru', GuruController::class);
Route::get('/guru/edit/{id}', [GuruController::class, 'edit']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'destroy']);

// Route Kelas
Route::resource('/kelas', KelasController::class);
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit']);
Route::get('/kelas/{id}/hapus', [KelasController::class, 'destroy']);

// Route Mapel
Route::resource('/mapel', MapelController::class);
Route::get('/mapel/edit/{id}', [MapelController::class, 'edit']);
Route::get('/mapel/hapus/{id}', [MapelController::class, 'destroy']);
 