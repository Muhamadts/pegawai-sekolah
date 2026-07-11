<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\DataIndukController;
use App\Http\Controllers\LaporanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect halaman utama ke login
Route::redirect('/', '/login');

// Semua route setelah login
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // CRUD Guru
    Route::resource('guru', GuruController::class);

    // CRUD Tendik
    Route::resource('tendik', TendikController::class);

    // CRUD Data Induk
    Route::resource('data-induk', DataIndukController::class);

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    
    Route::get('/laporan/pdf', [LaporanController::class, 'pdf'])
    ->name('laporan.pdf');
});

// Authentication Route
require __DIR__.'/auth.php';