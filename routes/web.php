<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return redirect()->route('beranda');
});

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/detail-lowongan/{id}', [BerandaController::class, 'show'])->name('detail-lowongan');


Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/pengaturan', [SettingsController::class, 'index'])->name('pengaturan');

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
Route::get('/dosen/{slug}', [DosenController::class, 'show'])->name('dosen.show');

Route::get('/dosen/{slug}/slots', [BookingController::class, 'getSlots']);
Route::post('/dosen/{slug}/booking', [BookingController::class, 'booking']);
