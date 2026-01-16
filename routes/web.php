<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardMagangController;
use App\Http\Controllers\ProjectController;

// ... route lainnya ...

// Route untuk halaman Notifikasi
Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('notifikasi');

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

// =======================
// AUTH
// =======================
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// =======================
// BERANDA (WAJIB LOGIN)
// =======================
Route::get('/beranda', [BerandaController::class, 'index'])
    ->name('beranda')
    ->middleware('auth');
/* DASHBOARD MAGANG */
Route::get('/dashboard-magang', [ProjectController::class, 'index'])
    ->name('dashboard.magang');

Route::get('/projects/create', [ProjectController::class, 'create'])
    ->name('projects.create');

Route::post('/projects', [ProjectController::class, 'store'])
    ->name('projects.store');

Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])
    ->name('projects.edit');

Route::put('/projects/{project}', [ProjectController::class, 'update'])
    ->name('projects.update');

Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])
    ->name('projects.destroy');


Route::get('/pengaturan', [SettingsController::class, 'index'])
    ->name('pengaturan');

// =====================
// AKUN
// =====================
Route::get('/pengaturan/edit-profil', [SettingsController::class, 'editProfil'])
    ->name('pengaturan.edit-profil');

Route::post('/pengaturan/edit-profil', [SettingsController::class, 'updateProfil'])
    ->name('pengaturan.update-profil');

// 🔥 TAMBAHKAN INI
Route::get('/pengaturan/ubah-kontak', function () {
    return 'Ubah Gmail / No Telepon (coming soon)';
})->name('pengaturan.ubah-kontak');

// 🔥 TAMBAHKAN INI
Route::get('/pengaturan/ubah-password', function () {
    return 'Ubah Kata Sandi (coming soon)';
})->name('pengaturan.ubah-password');

// =====================
// TENTANG APLIKASI
// =====================
Route::get('/pengaturan/versi', function () {
    return 'Versi Aplikasi v1.0.0';
})->name('pengaturan.versi');

Route::get('/pengaturan/ketentuan', function () {
    return 'Ketentuan Layanan (coming soon)';
})->name('pengaturan.ketentuan');

