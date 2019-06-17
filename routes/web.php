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
Route::get('encuesta', 'HogarController@verEncuesta')->name('encuesta');
Route::post('encuesta/crear', 'HogarController@crearEncuesta')->name('crearencuesta');

Route::get('encuesta/seccion_1', 'HogarController@verseccion1')->name('seccion1');
Route::get('encuesta/seccion_2', 'HogarController@verseccion2')->name('seccion2');
Route::get('encuesta/seccion_3', 'HogarController@verseccion3')->name('seccion3');
Route::get('encuesta/seccion_4', 'HogarController@verseccion4')->name('seccion4');
Route::get('encuesta/seccion_5', 'HogarController@verseccion5')->name('seccion5');
Route::get('encuesta/seccion_6', 'HogarController@verseccion6')->name('seccion6');

