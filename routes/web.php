<?php

use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

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

Route::group(['as' => 'room.'], function () {
    Route::get('/', [RoomController::class, 'index'])->name('index');
    Route::get('/room/{room:slug}', [RoomController::class, 'show'])->name('show');

    Route::group(['middleware' => 'auth', 'as' => 'pinjam.'], function () {
        Route::get('/room/{room:slug}/pinjam', [PeminjamanController::class, 'create'])->name('create');
        Route::post('/room/{room:slug}/pinjam', [PeminjamanController::class, 'store'])->name('store');
    });

    // Admin page test
    Route::get('/admin', function () {
        return view('admin');
    });

    Route::group(['middleware' => 'auth', 'as' => 'pinjam.'], function () {
        Route::post('/room/{room:slug}', [PeminjamanController::class, 'create'])->name('create');
        Route::post('/room/{room:slug}/pinjam', [PeminjamanController::class, 'store'])->name('store');
    });
});

Route::group(['middleware' => 'guest'], function () {
    Route::group(['as' => 'register.'], function () {
        Route::get('register', [RegisterController::class, 'index'])->name('index');
        Route::post('register', [RegisterController::class, 'register'])->name('register');
    });

    Route::group(['as' => 'login.'], function () {
        Route::get('login', [LoginController::class, 'index'])->name('index');
        Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
    });
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
