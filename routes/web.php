<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/probar', function () {
    return view('probar');
});

Route::get('/cuzco', function () {
    return view('cuzco');
});

Route::get('/huanuco', function () {
    return view('huanuco');
});

Route::get('/nazca', function () {
    return view('nazca');
});

Route::get('/tingomaria', function () {
    return view('tingomaria');
});

Route::get('/trujillo', function () {
    return view('trujillo');
});

Route::get('/tumbes', function () {
    return view('tumbes');
});

Route::get('/reservar', function () {
    return view('reservar');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
