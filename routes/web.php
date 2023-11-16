<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TiendaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('tienda');
});

Route::post('/registro', [LoginController::class, 'registro']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/admin', [AdminController::class, 'index']);

// En tu archivo de rutas web.php
Route::get('/productos/{categoria}', [TiendaController::class, 'productos'])->name('productos');






