<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarCalonSiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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

Route::group(['controller' => HomeController::class], function() {
    Route::get('/', 'index')->name('index');
    Route::get('/daftar-calon-murid', 'studentList')->name('student-list');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/status-kelulusan', 'checkStudentStatus')->name('check-status');
        Route::get('/form-pendaftaran-murid', 'showStudentForm')->name('student-form');
        Route::post('/form-pendaftaran-murid', 'registerStudent')->name('student-form.store');
    });

});

Route::group(['controller' => StudentController::class], function() {
    Route::get('login', 'showLoginForm')->name('login.index');
    Route::get('daftar', 'showRegisterForm')->name('register.index');

    Route::post('login', 'login')->name('login.authenticate');
    Route::post('daftar', 'register')->name('register.create');

    Route::get('logout', 'logout')->name('logout');
});

Route::redirect('admin', 'admin/daftar-calon-siswa');

Route::prefix('admin')->name('admin.')->group(function() {

    Route::group(['controller' => AuthController::class], function() {
        Route::get('login', 'showLoginForm')->name('login.index');
        Route::get('register', 'showRegisterForm')->name('register.index');
    
        Route::post('login', 'login')->name('login.authenticate');
        Route::post('register', 'register')->name('register.create');
    
        Route::get('logout', 'logout')->name('logout');
    });

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::resource('daftar-calon-siswa', DaftarCalonSiswaController::class);
    
        Route::get('kuesioner', function () {
            return view('admin.pages.kuesioner');
        })->name('kuesioner');
            
    });
});

