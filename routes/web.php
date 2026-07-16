<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\DataIndukController;
use App\Http\Controllers\LaporanController;

Route::redirect('/', '/login');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware('role:admin')
        ->name('dashboard');

    Route::resource('guru', GuruController::class)
        ->middleware('role:admin,guru_tendik');

    Route::resource('tendik', TendikController::class)
        ->middleware('role:admin,guru_tendik');

    Route::resource('data-induk', DataIndukController::class)
        ->middleware('role:admin,guru_tendik');

    Route::get('/laporan', [LaporanController::class, 'index'])
        ->middleware('role:admin,kepsek')
        ->name('laporan.index');

    Route::get('/laporan/pdf', [LaporanController::class, 'pdf'])
        ->middleware('role:admin,kepsek')
        ->name('laporan.pdf');
});

require __DIR__.'/auth.php';