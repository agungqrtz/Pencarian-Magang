<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| REDIRECT ROOT
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect()->route('beranda');
});

/*
|--------------------------------------------------------------------------
| BERANDA
|--------------------------------------------------------------------------
*/
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/detail-lowongan/{id}', [BerandaController::class, 'show'])->name('detail-lowongan');

/*
|--------------------------------------------------------------------------
| PROFILE & SETTINGS
|--------------------------------------------------------------------------
*/
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/pengaturan', [SettingsController::class, 'index'])->name('pengaturan');

/*
|--------------------------------------------------------------------------
| DOSEN
|--------------------------------------------------------------------------
*/
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
Route::get('/dosen/{slug}', [DosenController::class, 'show'])->name('dosen.show');

/*
|--------------------------------------------------------------------------
| BOOKING (MANUAL – TANPA AJAX & DATABASE)
|--------------------------------------------------------------------------
| Booking dilakukan di halaman dosen
| Tombol booking → /booking/berhasil
*/
Route::get('/booking/berhasil', function () {
    return view('berhasil');
})->name('booking.berhasil');

/*
|--------------------------------------------------------------------------
| BOOKING (EXISTING – BOLEH DIPAKAI NANTI)
|--------------------------------------------------------------------------
*/
Route::get('/dosen/{slug}/slots', [BookingController::class, 'getSlots']);
Route::post('/dosen/{slug}/booking', [BookingController::class, 'booking']);
