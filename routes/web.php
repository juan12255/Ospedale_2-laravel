<?php

use App\Http\Controllers\AlianzaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EspecialistaController;
use App\Http\Controllers\ImpoexpoController;
use App\Http\Controllers\UsuarioController;
use App\Models\Alianza;
use App\Models\Especialista;
use Illuminate\Support\Facades\Auth;
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
Route::resource('/alianzas',AlianzaController::class);
Route::resource('/especialistas',EspecialistaController::class);
Route::resource('/usuarios',UsuarioController::class);
Route::get('/export', [App\Http\Controllers\AlianzaController::class, 'export'])->name('alianzas.export');
Route::post('/import', [App\Http\Controllers\AlianzaController::class, 'import'])->name('alianzas.import');

Route::post('/import2', [App\Http\Controllers\EspecialistaController::class, 'import2'])->name('especialistas.import2');
Route::get('/export2', [App\Http\Controllers\EspecialistaController::class, 'export2'])->name('especialistas.export2');

Route::get('/documentos/{usuario}', [App\Http\Controllers\DocumentoController::class, 'index'])->name('documentos.index');
Route::get('/documentos/{usuario}/create', [App\Http\Controllers\DocumentoController::class, 'create'])->name('documentos.create');
Route::post('/documentos/{usuario}/store', [App\Http\Controllers\DocumentoController::class, 'store'])->name('documentos.store');

