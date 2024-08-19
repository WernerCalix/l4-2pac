<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', [HolaController::class, "index"]);
Route::get('/hola/{nombre}/{edad}', [HolaController::class, "conNombre"])->whereAlpha("nombre");

/**
 * Rutas para los productos.
 */
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/crear', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos/crear', [ProductoController::class, 'store'])->name('productos.store');


