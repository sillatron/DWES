<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        @include('includes.header')
        <form action="{{ url('/frutas/update/'.$fruta->id) }}" method="post">
            {{ csrf_field() }}
            Nombre:
            <input type="text" name="nombre" value="{{$fruta->nombre}}"><br>
            Descripción:
            <input type="text" name="descripcion" value="{{$fruta->descripcion}}"><br>
            Precio:
            <input type="number" name="precio" value="{{$fruta->precio}}"><br>
            <input type="submit" value="Actualizar"/>
        </form>
        @include('includes.footer')
    </body>
</html>
