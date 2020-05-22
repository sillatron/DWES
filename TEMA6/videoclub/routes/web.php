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
    //return view('index', ['peliculas'=>[]] ); // view('index', {'peliculas':[]})
    return redirect()->action('catalogController@getIndex');
});

Auth::routes();

// What's the diference between using :: and -> in php?
//:: no necesita intancias del objeto mientras que -> accede a la instancia del atributo de la clase

Route::get('/home', 'HomeController@index')->name('home'); // redirect movie/catalog

Route::group(['prefix'=>'catalog','middleware'=>'auth'], function(){
    Route::get('', 'catalogController@getIndex');
    Route::get('show/{id}', 'catalogController@getShow');
    Route::get('create', 'catalogController@getCreate');
    Route::get('store', 'catalogController@store');
    Route::get('edit/{id}', 'catalogController@edit');
    Route::get('save/{id}', 'catalogController@getEdit');
    Route::get('return/{id}', 'catalogController@getRented');
    Route::post('create', 'catalogController@postCreate');
    Route::put('save/{id}', 'catalogController@putEdit');
    
});
