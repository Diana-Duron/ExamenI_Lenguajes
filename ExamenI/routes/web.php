<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\ContactoController;
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
    return view('welcome');
});

Route::get('/directorios', [DirectorioController::class, 'index'])->name('directorio.inicio');

Route::get('/directorios/crear', [DirectorioController::class, 'crear'])->name('directorio.crear');

Route::get('/directorios/buscar', [DirectorioController::class, 'buscar'])->name('directorio.buscar');

Route::get('/directorios/{idD}/contactos', [ContactoController::class, 'mostrarContactosPorDirectorio'])->name('directorio.c');


