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
    return view('index');
});

Route::group(['prefix'=>'frutas'], function(){
    Route::get('listado', 'FrutaController@listado');
    Route::get('detalles/{id}', 'FrutaController@detalles');
    Route::get('create', 'FrutaController@create');
    Route::get('store', 'FrutaController@store');
    Route::post('update/{id}', 'FrutaController@update');
    Route::get('borrar/{id}', 'FrutaController@delete');
});
