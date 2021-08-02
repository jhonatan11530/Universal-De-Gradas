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
/*-------- CATALOGO DE PRODUCTOS -------*/
Route::get('/catalogo', function () {
    return view('Catalogo.Catalogo');
});
/*-------- PRODUCTO Gradas de 20cm -------*/
Route::get('catalogo/Gradas-20', function () {
    return view('Catalogo.Productos.gradas20');
});
/*-------- PRODUCTO Gradas Redonda -------*/
Route::get('catalogo/GradasRedonda', function () {
    return view('Catalogo.Productos.gradas-redonda');
});
/*-------- PRODUCTO Gradas Espina -------*/
Route::get('catalogo/Espina', function () {
    return view('Catalogo.Productos.gradas-espina');
});
/*-------- PRODUCTO Gradas Tapada -------*/
Route::get('catalogo/Tapada', function () {
    return view('Catalogo.Productos.gradas-tapada');
});
/*-------- PRODUCTO Gradas Cuadrada -------*/
Route::get('catalogo/GradasCuadradas', function () {
    return view('Catalogo.Productos.gradas-cuadrada');
});
/*-------- PRODUCTO Gradas Metalicas -------*/
Route::get('catalogo/GradasMetalicas', function () {
    return view('Catalogo.Productos.gradas-metalica');
});
/*-------- PRODUCTO Cerrajeria -------*/
Route::get('catalogo/Arquitectura', function () {
    return view('Catalogo.Productos.cerrajeria');
});
/*-------- PRODUCTO Puertas Metalicas -------*/
Route::get('catalogo/PuertasMetalicas', function () {
    return view('Catalogo.Productos.puertas-metalicas');
});
/*-------- PRODUCTO Ventanas Metalicas -------*/
Route::get('catalogo/VentanasMetalicas', function () {
    return view('Catalogo.Productos.ventanas-metalicas');
});

/*-------- ENVIAR CORREO -------*/
Route::post('Enviar/Response','MailController@Mail');