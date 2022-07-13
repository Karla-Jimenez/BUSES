<?php

use App\Http\Controllers\MotoristasController;
use App\Http\Controllers\RotacionesController;
use App\Http\Controllers\UnidadesController;
use App\Http\Controllers\GoogleController;
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

Route::resource('motoristas', MotoristasController::class);
Route::resource('rotaciones', RotacionesController::class);
Route::resource('unidades',UnidadesController::class);
Route::get('google-autocomplete', [GoogleController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
