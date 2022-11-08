<?php

use App\Http\Controllers\AlianzaController;
use App\Http\Controllers\EspecialistaController;
use App\Http\Controllers\UsuarioController;
use App\Models\alianza;
use App\Models\especialista;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/Alianzas',AlianzaController::class);
Route::resource('/Especialistas',EspecialistaController::class);
Route::resource('/Usuarios',UsuarioController::class);
