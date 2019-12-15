<!DOCTYPE html>
<?php 
    if(isset($_POST['cerrar'])){
        include 'salir.php';
    }
    if (!isset($_SESSION)) session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
    </head>
    <body>
        <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'] ?></h3>
        <form method="POST" action="lateral.php">
            <input type="submit" name="creare" value="Crear entrada">
            <input type="submit" name="crearc" value="Crear categoria">
            <input type="submit" name="datos" value="Mis datos">
            <input type="submit" name="cerrar" value="Cerrar sesión">
        </form> 
    </body>
</html>


<?php
if(isset($_POST['cerrar'])) include 'salir.php';
elseif (isset($_POST['crearc'])){
    header("Location: categoria.php");
}
elseif(isset ($_POST['creare'])){
    header("Location: entrada.php");
}
?>