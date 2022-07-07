<?php

use App\Http\Controllers\MotoristasController;
use App\Http\Controllers\RotacionesController;
use App\Http\Controllers\UnidadesController;
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
<<<<<<< HEAD
Route::resource('unidades',UnidadesController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::resource('unidades',UnidadesController::class);
>>>>>>> 6abbafbc1c41bb2ca544873673d94bf398384d08
