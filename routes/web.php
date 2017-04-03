<?php

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



//----------rutas controlador principal---
Route::get('/', 'Controller@index');
Route::get('/destacadas', 'Controller@ver_todas');
Route::get('/comedia', 'Controller@comedia');
Route::get('/terror', 'Controller@terror');
Route::get('/accion', 'Controller@accion');
Route::get('/aventura', 'Controller@aventura');
Route::get('/ciencia_ficcion', 'Controller@ciencia_ficcion');
Route::get('/ver_todas', 'Controller@ver_todas');


//--------rutas control y registrde usuarios-----------
Route::post('/empezar_a_votar', 'clienteController@insert');
Route::get('/cerrarSesion', 'clienteController@cerrarSesion');

//---------rutas valoracion----------------
Route::post('/calificar', 'valoracionController@calificar');
Route::get('{titulo}/eliminar/', [
	'as' => 'eliminar',
	'uses' => 'valoracionController@eliminar'
	]);
Route::get('{titulo}/cambiar/', [
	'as' => 'cambiar',
	'uses' => 'valoracionController@cambiar'
	]);

Route::post('/actualizar', 'valoracionController@actualizar');