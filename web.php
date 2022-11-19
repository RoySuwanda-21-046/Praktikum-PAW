<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/home',['App\Http\Controllers\maincontrol', 'home'] );

Route::get('/about', ['App\Http\Controllers\maincontrol', 'about'] );


Route::get('/data_mhs', [MahasiswaController::class, 'index'] )->name('data');

Route::get('/create', ['App\Http\Controllers\MahasiswaController', 'create'] )->name('create');

Route::post('/store', ['App\Http\Controllers\MahasiswaController', 'store'] )->name('store');

Route::delete('/Mahasiswa/{id}', [MahasiswaController::class, 'destroy'] );

Route::get('/Mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'] );
Route::put('/Mahasiswa/{id}', [MahasiswaController::class, 'update'] );


