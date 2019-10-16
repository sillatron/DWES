<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="Ej1.php" method="POST">
        <label>Nombre: </label>
        <input type="text" name="nombre">
        <br><br>

        <label>Apellidos: </label>
        <input type="text" name="apellidos">
        <br><br>

        <label>Dirección: </label>
        <input type="text" name="direccion">
        <br><br>

        <label>Edad: </label>
        <input type="text" name="edad">
        <br><br>

        <label>Teléfono: </label>
        <input type="text" name="telefono">
        <br><br>

        <input type="submit">
        <br><br>
    </form>


    <?php
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $direccion = $_POST['direccion'];
        $edad = (int)$_POST['edad'];
        $telefono = $_POST['telefono'];
        echo "<span style='color:red'>Nombre: </span>" . $nombre;
        echo "<br>";
        echo "<span style='color:red'>Apellidos: </span>" . $apellidos;
        echo "<br>";
        echo "<span style='color:red'>Direccion: </span>" . $direccion;
        echo "<br>";
        echo "<span style='color:red'>Edad: </span>" . $edad;
        echo "<br>";
        echo "<span style='color:red'>Teléfono: </span>" . $telefono;
    ?>
</body>
</html>