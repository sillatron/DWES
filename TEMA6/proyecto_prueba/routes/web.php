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

Route::get('usuario/{nombre?}', function($nombre='Agapito di Soursa'){
    return view('vista_prueba');
});

Route::get('usuario/{nombre?}', function($nombre='Agapito di Soursa'){
    return 'Usuario: '.$nombre;

});

Route::get('edad/{edad?}', function($edad=0){
    return 'usuario'. $edad;

})
->where ('edad', '[edad]+');

//Ruta principal vamos llamar a la vista home con el valor de l avariable Javi


//llavamos a la vista home con el valor de los 2 parametros
Route::get('usuario3/{nombre}/{edad}', function($nombre, $edad)
{ return view ('principal.index', ['nombre'=>$nombre, 'edad'=>$edad]);})
->where(array('nombre'=>'[A-Za-z*+','edad'=>'[0-9]+'));

//añade dos parametros opcionales (?) a la ruta y le manda su valor a la vista
Route::get('usuario4/{nombre?}/{edad?}',function($nombre='Ninguno',$edad=18)
{
    return view('principal/index',['nombre'=>$nombre,'edad'=>$edad]);
});

//utilizar With en lugar de array para mandar los datos a la vista
Route::get('usuario5/{nombre?}/{edad?}',function($nombre='Ninguno',$edad=18)
{
    return view('principal/index')->with('nombre',$nombre)
                        ->with('edad',$edad);
});
    

