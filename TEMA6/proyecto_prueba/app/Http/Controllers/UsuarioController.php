<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $nombre='Antonio';
        $edad=23;
        return view('index',['nombre'=>$nombre,'edad'=>$edad]);
    }
    //
}
