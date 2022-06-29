<?php

use App\Http\Controllers\MotoristasController;
use App\Http\Controllers\RotacionController;
use App\Http\Controllers\UnidadesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

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
Route::resource('rotacion', RotacionController::class);
Route::resource('unidades',UnidadesController::class);
Route::get('/login',[SessionController::class, 'create'])->name('login.index');
Route::post('/login',[SessionController::class, 'store'])->name('login.store');
Route::get('/register',[RegisterController::class, 'create'])->name('register.index');
Route::post('/register',[SessionController::class, 'store'])->name('register.store');