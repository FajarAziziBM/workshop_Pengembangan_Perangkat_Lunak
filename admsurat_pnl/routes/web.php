<?php

use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardProdiController;
use App\Http\Controllers\DashboardUsersController;
use App\Http\Controllers\DashboardUploadController;
use App\Http\Controllers\DashboardApproveController;
use App\Http\Controllers\DashboardJurusanController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardRepositoryController;
use App\Http\Controllers\DashboardSuratMasukController;
use App\Http\Controllers\DashboardApprovesiorController;
use App\Http\Controllers\DashboardSuratKeluarController;
use App\Http\Controllers\DashboardStatistikSuratController;

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
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});

Route::prefix('/dashboard')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');

    Route::prefix('/surat')->group(function () {
        Route::resource('/surat-masuk', DashboardSuratMasukController::class)->except(['create', 'show', 'edit'])->middleware('auth');

        Route::resource('/surat-keluar', DashboardSuratKeluarController::class)->except(['create', 'show', 'edit'])->middleware('auth');

        Route::get('/approve', [DashboardApproveController::class, 'index'])->name('approve.index')->middleware('auth');

    });

    Route::prefix('/masterdata')->group(function () {
        Route::resource('/data-prodi', DashboardProdiController::class)->except(['create', 'show', 'edit'])->middleware('auth');

        Route::resource('/data-jurusan', DashboardJurusanController::class)->except(['create', 'show', 'edit'])->middleware('auth');

        Route::resource('/data-mahasiswa', DashboardMahasiswaController::class)->except(['create', 'show', 'edit'])->middleware('auth');

        Route::resource('/data-approvesior', DashboardApprovesiorController::class)->except(['create', 'show', 'edit'])->middleware('auth');

    });

    Route::prefix('/users')->group(function () {
        Route::resource('/data-user', DashboardUserController::class)->except(['create', 'show', 'edit'])->middleware('auth');

        Route::get('/profile', [DashboardProfileController::class, 'index'])->name('profile.index')->middleware('auth');
    });

    Route::get('/statistik-surat', [DashboardStatistikSuratController::class, 'index'])->name('statistik-surat.index')->middleware('auth');


});

Route::fallback(function () {
    return redirect()->route('login');
});
