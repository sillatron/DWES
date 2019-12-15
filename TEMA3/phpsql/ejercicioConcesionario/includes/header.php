<!DOCTYPE html>
<html>
    <?php if (!isset($_SESSION)) session_start(); ?>
    <head>
        <meta charset="UTF-8">
        <title>Concesionario</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
    </head>
    <body>
        <header><h1>Bienvenido, <?= $_SESSION['usuario'] ?></h1></header>
    </body>
</html>
