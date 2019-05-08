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

Route::get('registro', 
    'RegistroController@index');

Route::get('pruebas', 
    'RegistroController@pruebas');

    //RUTAS DE ZOOS
Route::get('zoos','ZoosController@index')->name('zoos.index');

Route::get('zoos/create','ZoosController@create')->name ('zoos.create');

Route::get('zoos/{zoo}/edit','ZoosController@edit')->name('zoos.edit');//ruta para editar el registro

Route::get ('zoos/{zoo}','ZoosController@show')->name('zoos.show');//{variable que manda a llamar}

Route::post('zoos','ZoosController@store')->name ('zoos.store');

Route::put ('zoos/{zoo}','ZoosController@update')->name('zoos.update');

Route::delete('zoos/{zoo}','ZoosController@delete')->name('zoos.delete');

//RUTAS DE SPECIES

Route::get('species','SpeciesController@index')->name('species.index');

Route::get('species/create','SpeciesController@create')->name ('species.create');

Route::get('species/{zoo}/edit','SpeciesController@edit')->name('species.edit');//ruta para editar el registro

Route::get ('species/{zoo}','SpeciesController@show')->name('species.show');//{variable que manda a llamar}

Route::post('species','SpeciesController@store')->name ('species.store');

Route::put ('species/{zoo}','SpeciesController@update')->name('species.update');

Route::delete('species/{zoo}','SpeciesController@delete')->name('species.delete');


