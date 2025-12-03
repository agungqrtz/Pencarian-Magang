<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;

// Route default: Mengarahkan halaman utama ('/') langsung ke Beranda
Route::get('/', function () {
    return redirect()->route('beranda');
});

// Route untuk halaman Beranda (Daftar Lowongan)
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

// Route untuk halaman Detail Lowongan (Menerima parameter ID)
Route::get('/detail-lowongan/{id}', [BerandaController::class, 'show'])->name('detail-lowongan');

// Route untuk halaman Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Route untuk halaman Pengaturan
Route::get('/pengaturan', [SettingsController::class, 'index'])->name('pengaturan');