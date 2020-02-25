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
        @foreach($frutas as $fruta)
        <ul>
            <li>
                <a href="{{url('/frutas/detalles/'.$fruta->id)}}">{{$fruta->nombre}}</a>
            </li>
            <li>
                <a href="{{url('/frutas/borrar/'.$fruta->id)}}">Borrar</a>
            </li>
        </ul>      
        @endforeach
        @include('includes.footer')
    </body>
</html>
