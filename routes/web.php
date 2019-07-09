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
Route::get('Encuesta/Vivienda', 'ViviendaController@verEncuestaVivienda')->name( 'verEncuestaVivienda');
Route::post('encuesta/Vivienda/crear', 'ViviendaController@crearEncuestaVivienda')->name( 'crearEncuestaVivienda');
Route::get('encuesta/Vivienda/ver', 'ViviendaController@verListadoVivienda')->name( 'verListadoVivienda');
Route::get('encuesta/Vivienda/{id}', 'ViviendaController@verVivienda')->name( 'verDetalleVivienda');

Route::get('Encuesta/Hogar', 'HogarController@verEncuestaHogar')->name( 'verEncuestaHogar');
Route::post( 'Encuesta/Hogar/crear', 'HogarController@crearEncuestaHogar')->name( 'crearEncuestaHogar');

Route::get('Encuesta/Individuo', 'IndividuoController@verEncuestaIndividuo')->name( 'verEncuestaIndividuo');
Route::post( 'Encuesta/Individuo/crear', 'IndividuoController@crearEncuestaIndividuo')->name( 'crearEncuestaIndividuo');


// Route::get('encuestaHogar/seccion_1', 'HogarController@verHogarseccion1')->name('Hogar_seccion1');
// Route::get('encuestaHogar/seccion_2', 'HogarController@verHogarseccion2')->name('Hogar_seccion2');
// Route::get('encuestaHogar/seccion_3', 'HogarController@verHogarseccion3')->name('Hogar_seccion3');
// Route::get('encuestaHogar/seccion_4', 'HogarController@verHogarseccion4')->name('Hogar_seccion4');
// Route::get('encuestaHogar/seccion_5', 'HogarController@verHogarseccion5')->name('Hogar_seccion5');
// Route::get('encuestaHogar/seccion_6', 'HogarController@verHogarseccion6')->name('Hogar_seccion6');

