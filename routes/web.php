<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('guru', GuruController::class);

require __DIR__.'/auth.php';