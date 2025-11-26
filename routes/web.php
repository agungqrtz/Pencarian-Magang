<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

// Route untuk halaman Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');