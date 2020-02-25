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
        <form action="{{url('/frutas/store')}}">
            Nombre:
            <input type="text" name="nombre"><br>
            Descripción:
            <input type="text" name="descripcion"><br>
            Precio:
            <input type="number" name="precio"><br>
            <input type="submit" value="Enviar"/>
        </form>
        @include('includes.footer')
    </body>
</html>
