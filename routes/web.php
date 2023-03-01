<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\http\Controllers\LoginController;
use App\http\Controllers\HomeController;
use App\http\Controllers\DatacontentController;
use App\http\Controllers\FunnelController;
use App\http\Controllers\LaporanController;


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

Route::get('/', function () {
    return view('login');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Halaman Register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registerStore', [LoginController::class, 'registerStore'])->name('registerStore');



Route::get('/user', [UserController::class, 'user'])->name('user');
Route::POST('user/store', [UserController::class, 'store']);
Route::POST('/user/{id}/update', [UserController::class, 'update']);
Route::get('/user/{id}/destroy', [UserController::class, 'destroy']);


Route::get('/home', [HomeController::class, 'home'])->name('home');

    Route::get('/data', [DatacontentController::class, 'content'])->name('data');
    Route::POST('data_content/store', [DatacontentController::class, 'store']);
    Route::POST('/data_content/{id}/update', [DatacontentController::class, 'update']);
    Route::get('/data_content/{id}/destroy', [DatacontentController::class, 'destroy']);



Route::get('/funnel', [FunnelController::class, 'marketing'])->name('funnel');
Route::POST('funnel/store', [FunnelController::class, 'store']);
Route::POST('/funnel/{id}/update', [FunnelController::class, 'update']);
Route::get('/funnel/{id}/destroy', [FunnelController::class, 'destroy']);


Route::get('/cetak_laporan', [LaporanController::class, 'laporan'])->name('cetak_laporan');

