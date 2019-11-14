<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Concesionario</title>
        <link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
    </head>
    <body>
        <?php include 'header.php';
        include 'navegacion.php';
        include 'Conexion.php';?>
        <main>
            <h2>Este es el borrado</h2>
            
        <?php
        if(!isset($_POST['submit'])){
            $id = $_GET['id'];
            $sql ="delete from Coches where id = $id";
            $borrar= mysqli_query($conexion, $sql);
            header("Location: index.php");
        }
        mysqli_close($conexion);
        ?>
        </main>
        
        <?php include 'footer.php';?>
        
    </body>
</html>
