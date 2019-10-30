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
        <?php
        $servidor="localhost";
        $usuario="root";
        $contrasena="";
        $bd="Concesionario";
        $conexion= mysqli_connect($servidor,$usuario,$contrasena,$bd);
        if(mysqli_connect_errno()){
            echo 'No hay conexión';
        }else{
            echo 'Hay conexión';
        }
        
        ?>
    </body>
</html>
