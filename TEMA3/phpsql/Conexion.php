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
        $usuario="userdwes";
        $contrasena="pestillo";
        $bd="Concesionario";
        $conexion= mysqli_connect($servidor,$usuario,$contrasena,$bd);
        if(mysqli_connect_errno($conexion)){
            echo 'No se ha podido conectar con la base de datos<br>';
            die("Error: ". mysqli_connect_error($conexion));
        }
        ?>
    </body>
</html>
