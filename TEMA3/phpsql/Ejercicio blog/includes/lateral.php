<!DOCTYPE html>
<?php 
    if(isset($_POST['cerrar'])){
        include 'salir.php';
    }
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
    </head>
    <body>
        <h3>Bienvenido, <?= $_SESSION['usuario'] ?></h3>
        <form method="POST" action="lateral.php">
            <input type="submit" name="creare" value="Crear entrada">
            <input type="submit" name="crearc" value="Crear categoria">
            <input type="submit" name="datos" value="Mis datos">
            <input type="submit" name="cerrar" value="Cerrar sesión">
        </form> 
    </body>
</html>
