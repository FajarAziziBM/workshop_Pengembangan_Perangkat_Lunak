<?php

use App\Http\Controllers\ApproveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\UserController;

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
    Route::get('/dosen', function () {
        return view('master.dosen');
    });
    Route::get('/mahasiswa', function () {
        return view('master.mahasiswa');
    });
    Route::get('/approvesior', function () {
        return view('master.approvesior');
    });
    Route::get('/jurusan', function () {
        return view('master.jurusan');
    });
    Route::get('/prodi', function () {
        return view('master.prodi');
    });
});

Route::prefix('/account')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('account.users')->middleware('auth');
    Route::get('/profile', [ProfileController::class, 'index'])->name('account.profile')->middleware('auth');
});

Route::prefix('/letters')->group(function () {
    Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('letters.surat-masuk')->middleware('auth');
    Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])->name('letters.surat-keluar')->middleware('auth');
    Route::get('/approve', [ApproveController::class, 'index'])->name('letters.approve')->middleware('auth');
    Route::get('/history', [HistoryController::class, 'index'])->name('letters.history')->middleware('auth');
});
