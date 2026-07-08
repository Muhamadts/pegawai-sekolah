<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\DataIndukController;

Route::redirect('/', '/login');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('guru', GuruController::class);

    Route::resource('tendik', TendikController::class);

    Route::resource('data-induk', DataIndukController::class);

});

require __DIR__.'/auth.php';