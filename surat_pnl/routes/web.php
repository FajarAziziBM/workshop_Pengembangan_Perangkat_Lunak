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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.home')->middleware('auth');

// Route::prefix('/dashboard')->group(function () {
//     Route::get('/home', [DashboardController::class, 'index'])->name('dashboard.home');
// });



// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/surat', function () {
//     return view('surat');
// });

// Route::get('/form-surat', function () {
//     return view('form_surat');
// });

// Route::get('/akun', function () {
//     return view('akun');
// });

// Route::get('/aprove', function () {
//     return view('aprove');
// });

// // Route::get('/login', function () {
// //     return view('auth.layout.login');
// // });

// Route::get('/user', function () {
//     return view('user');
// });
