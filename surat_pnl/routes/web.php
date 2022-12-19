<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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



Route::get('/surat', function () {
    return view('dashboard.surat');
});

Route::get('/form-surat', function () {
    return view('dashboard.form_surat');
});

Route::get('/akun', function () {
    return view('dashboard.akun');
});

Route::get('/aprove', function () {
    return view('dashboard.aprove');
});

Route::get('/user', function () {
    return view('dashboard.user');
});
