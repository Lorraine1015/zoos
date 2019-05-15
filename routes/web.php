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

//RUTAS DE ANIMALES
Route::get('animals','AnimalsController@index')->name('animals.index');
  
Route::get('animals/create', 'AnimalsController@create')->name('animals.create');

Route::post('animals', 'AnimalsController@store')->name('animals.store');
//RUTAS DE ZOOS
Route::get('zoos','ZoosController@index')->name('zoos.index');

Route::get('zoos/create','ZoosController@create')->name ('zoos.create');

Route::get('zoos/{zoo}/edit','ZoosController@edit')->name('zoos.edit');//ruta para editar el registro

Route::get ('zoos/{zoo}','ZoosController@show')->name('zoos.show');//{variable que manda a llamar}

Route::get('zoos/{zoo}/species/edit', 'SpeciesZoosController@edit')->name('zoos.species.edit');

Route::put('zoos/{zoo}/species/update', 'SpeciesZoosController@update')->name('zoos.species.update');

Route::post('zoos','ZoosController@store')->name ('zoos.store');

Route::put ('zoos/{zoo}','ZoosController@update')->name('zoos.update');

Route::delete('zoos/{zoo}','ZoosController@delete')->name('zoos.delete');

//RUTAS DE SPECIES

Route::get('species','SpeciesController@index')->name('species.index');

Route::get('species/create','SpeciesController@create')->name ('species.create');

Route::get('species/{species}/edit','SpeciesController@edit')->name('species.edit');//ruta para editar el registro

Route::get ('species/{species}','SpeciesController@show')->name('species.show');//{variable que manda a llamar}

Route::post('species','SpeciesController@store')->name ('species.store');

Route::put ('species/{species}','SpeciesController@update')->name('species.update');

Route::delete('species/{species}','SpeciesController@delete')->name('species.delete');


