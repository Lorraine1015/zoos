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

Route::get('zoos','ZoosController@index')->name('zoos.index');

Route::get('zoos/create','ZoosController@create')->name ('zoos.create');

Route::get('zoos/{zoo}/edit','ZoosController@edit')->name('zoos.edit');//ruta para editar el registro

Route::get ('zoos/{zoo}','ZoosController@show')->name('zoos.show');//{variable que manda a llamar}

Route::post('zoos','ZoosController@store')->name ('zoos.store');

Route::put ('zoos/{zoo}','ZoosController@update')->name('zoos.update');

Route::delete('zoos/{zoo}','ZoosController@delete')->name('zoos.delete');






