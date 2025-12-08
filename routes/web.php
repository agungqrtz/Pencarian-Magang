<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DosenController;

// Route default: Redirect "/" ke "/beranda"
Route::get('/', function () {
    return redirect()->route('beranda');
});

// Halaman Beranda (Daftar Lowongan)
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

// Halaman Detail Lowongan
Route::get('/detail-lowongan/{id}', [BerandaController::class, 'show'])->name('detail-lowongan');

// Halaman Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Halaman Pengaturan
Route::get('/pengaturan', [SettingsController::class, 'index'])->name('pengaturan');

// Tambahan dari versi GitHub (jika ada)
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');

