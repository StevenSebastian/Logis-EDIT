<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

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
    return view('layouts.template.Logis.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/anggota/create', 'App\Http\Controllers\AnggotaController@create');
Route::post('/anggota/store', 'App\Http\Controllers\AnggotaController@store')->name('anggota.store');
Route::get('/anggota/index', 'App\Http\Controllers\AnggotaController@index');
Route::get('/anggota/edit', 'App\Http\Controllers\AnggotaController@edit')->name('anggota.edit');
Route::get('/anggota/destroy', 'App\Http\Controllers\AnggotaController@destroy')->name('anggota.destroy');
Route::get('/anggota/show', 'App\Http\Controllers\AnggotaController@show')->name('anggota.show');