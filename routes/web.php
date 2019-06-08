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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Encuestas
Route::get('encuesta', 'EncuestaController@verEncuesta')->name('encuesta');
Route::post('encuesta/crear', 'EncuestaController@crearEncuesta')->name('crearencuesta');

Route::get('encuesta/seccion_1', 'EncuestaController@verseccion1')->name('seccion1');
Route::get('encuesta/seccion_2', 'EncuestaController@verseccion2')->name('seccion2');
Route::get('encuesta/seccion_3', 'EncuestaController@verseccion3')->name('seccion3');
Route::get('encuesta/seccion_4', 'EncuestaController@verseccion4')->name('seccion4');
Route::get('encuesta/seccion_5', 'EncuestaController@verseccion5')->name('seccion5');
Route::get('encuesta/seccion_6', 'EncuestaController@verseccion6')->name('seccion6');

