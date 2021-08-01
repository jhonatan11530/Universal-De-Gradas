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
    return view('Inicio.inicio');
});

Route::get('/acerca', function () {
    return view('Nosotros.Acerca');
});

Route::get('/servicio', function () {
    return view('Servicio.Servicio');
});

Route::get('/contacto', function () {
    return view('Contacto.Contacto');
});

Route::get('/catalogo', function () {
    return view('Productos.Catalogo');
});