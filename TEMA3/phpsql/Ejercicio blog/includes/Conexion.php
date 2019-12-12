<?php
$servidor="localhost";
$usuario="userdwes";
$contrasena="pestillo";
$bd="Blog";
$conexion= mysqli_connect($servidor,$usuario,$contrasena,$bd);
if(mysqli_connect_errno($conexion)){
    echo 'No se ha podido conectar con la base de datos<br>';
    die("Error: ". mysqli_connect_error($conexion));
}
?>
