<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarCalonSiswa\AdministrasiController;
use App\Http\Controllers\DaftarCalonSiswa\AkademikController;
use App\Http\Controllers\DaftarCalonSiswa\NonAkademikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalPengumumanController;
use App\Http\Controllers\PetugasController;
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

Route::get('/', [DashboardController::class, 'index'])->name('index');


Route::group(['controller' => AuthController::class], function() {
    Route::get('login', 'showLoginForm')->name('login.index');
    Route::get('register', 'showRegisterForm')->name('register.index');

    Route::post('login', 'login')->name('login.authenticate');
    Route::post('register', 'register')->name('register.create');
    Route::get('logout', 'logout')->name('logout');

});

Route::prefix('admin')->name('admin.')->group(function() {

    Route::group(['controller' => AdminAuthController::class], function() {
        Route::get('login', 'showLoginForm')->name('login.index');
        Route::get('register', 'showRegisterForm')->name('register.index');
    
        Route::post('login', 'login')->name('login.authenticate');
        Route::post('register', 'register')->name('register.create');
    
        Route::get('logout', 'logout')->name('logout');
    });
});

Route::resource('petugas', PetugasController::class);