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


Route::group(['middleware' => ['auth']], function () {
    //



    // Encuestas
    Route::get('encuesta/vivienda', 'ViviendaController@verEncuestaVivienda')->name('verEncuestaVivienda');
    Route::post('encuesta/vivienda/crear', 'ViviendaController@crearEncuestaVivienda')->name('crearEncuestaVivienda');


    Route::get('encuesta/vivienda/editar/{id_vivienda}', 'ViviendaController@editarVivienda')->name('editarVivienda');
    Route::post('encuesta/vivienda/editar', 'ViviendaController@actualizarVivienda')->name('actualizarVivienda');

    Route::get('encuesta/viviendas/', 'ViviendaController@verListadoVivienda')->name('verListadoVivienda');
    Route::get('encuesta/vivienda/{id}', 'ViviendaController@verVivienda')->name('verDetalleVivienda');
    Route::get('encuesta/viviendas/generar', 'ViviendaController@autogenerar')->name('autogenerarVivienda');

    Route::get('vivienda/hogares/{id_vivienda}', 'ViviendaController@verHogares')->name('verHogares');

    Route::get('encuesta/hogar/{id}', 'HogarController@verEncuestaHogar')->name('verEncuestaHogar');
    Route::post('encuesta/hogar/crear', 'HogarController@crearEncuestaHogar')->name('crearEncuestaHogar');

    Route::get('encuesta/hogares/generar/{id}', 'HogarController@autogenerar')->name('autogenerarHogar');

    Route::get('encuesta/individuo/{id}', 'IndividuoController@verEncuestaIndividuo')->name('verEncuestaIndividuo');
    Route::post('encuesta/individuo/crear', 'IndividuoController@crearEncuestaIndividuo')->name('crearEncuestaIndividuo');
    Route::get('hogar/individuos/{id}', 'HogarController@verIndividuos')->name("individuosEnHogar");



});

