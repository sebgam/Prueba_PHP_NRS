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



Route::get('/', 'Controller@index');

Route::get('/destacadas', 'Controller@destacada');
Route::get('/comedia', 'Controller@comedia');
Route::get('/terror', 'Controller@terror');
Route::get('/accion', 'Controller@accion');
Route::get('/aventura', 'Controller@aventura');
Route::get('/ciencia_ficcion', 'Controller@ciencia_ficcion');
Route::get('/ver_todas', 'Controller@ver_todas');
