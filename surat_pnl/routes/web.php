<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\ApprovesiorController;
use App\Http\Controllers\SuratKeluarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::prefix('/dashboard')->group(function () {
    route::get('/home', [DashboardController::class, 'index'])->name('dashboard.home')->middleware('auth');
});

Route::prefix('/master-data')->group(function () {
    // Route::get('/dosen', [DosenController::class, 'index'])->name('master-data.dosen')->middleware('auth');
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('master-data.mahasiswa')->middleware('auth');
    Route::get('/approvesior', [ApprovesiorController::class, 'index'])->name('master-data.approvesior')->middleware('auth');
    Route::get('/jurusan', [JurusanController::class, 'index'])->name('master-data.jurusan')->middleware('auth');
    Route::get('/prodi', [ProdiController::class, 'index'])->name('master-data.jurusan')->middleware('auth');
});

Route::prefix('/letters')->group(function () {
    Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('letters.surat-masuk')->middleware('auth');
    Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])->name('letters.surat-keluar')->middleware('auth');
    Route::get('/approve', [ApproveController::class, 'index'])->name('letters.approve')->middleware('auth');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('letters.laporan')->middleware('auth');
});

Route::prefix('/account')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('account.users')->middleware('auth');
    Route::get('/profile', [ProfileController::class, 'index'])->name('account.profile')->middleware('auth');
});
