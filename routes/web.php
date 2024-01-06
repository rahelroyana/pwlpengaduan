<?php
use App\Http\Controllers\AkunController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\KelurahanController;
use Illuminate\Support\Facades\Route;

// Rute untuk pengaduan
Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');
Route::get('/pengaduan/{id}', [PengaduanController::class, 'show'])->name('pengaduan.show');

Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::put('/pengaduan/{id}', [PengaduanController::class, 'update'])->name('pengaduan.update');
Route::delete('/pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.destroy');

// Rute untuk akun
Route::resource('akun', AkunController::class);
Route::get('/akun', [AkunController::class, 'index'])->name('akun.index');
Route::get('/akun/{id}', [AkunController::class, 'show'])->name('akun.show');
Route::post('/akun', [AkunController::class, 'store'])->name('akun.store');
// Route::get('/akun', [AkunController::class, 'create'])->name('akun.create');
Route::put('/akun/{id}', [AkunController::class, 'update'])->name('akun.update');
Route::delete('/akun/{id}', [AkunController::class, 'destroy'])->name('akun.destroy');

// Rute untuk kelurahan
Route::get('/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan.index');
Route::get('/kelurahan/{id}', [KelurahanController::class, 'show'])->name('kelurahan.show');
Route::post('/kelurahan', [KelurahanController::class, 'store'])->name('kelurahan.store');
Route::put('/kelurahan/{id}', [KelurahanController::class, 'update'])->name('kelurahan.update');
Route::delete('/kelurahan/{id}', [KelurahanController::class, 'destroy'])->name('kelurahan.destroy');

// Rute untuk informasi
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
Route::get('/informasi/{id}', [InformasiController::class, 'show'])->name('informasi.show');
Route::post('/informasi', [InformasiController::class, 'store'])->name('informasi.store');
Route::put('/informasi/{id}', [InformasiController::class, 'update'])->name('informasi.update');
Route::delete('/informasi/{id}', [InformasiController::class, 'destroy'])->name('informasi.destroy');

// Rute untuk penduduk
Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
Route::get('/penduduk/{id}', [PendudukController::class, 'show'])->name('penduduk.show');
Route::post('/penduduk', [PendudukController::class, 'store'])->name('penduduk.store');
Route::put('/penduduk/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');
