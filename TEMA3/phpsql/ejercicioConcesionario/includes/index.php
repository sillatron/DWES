<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Concesionario</title>
        <link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
    </head>
    <body>
        <?php include 'header.php';?>
        <?php include 'navegacion.php';?>
        <main>
            <h2>Este es el listado de coches</h2>
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
        $sql="select * from Coches";
        $consulta= mysqli_query($conexion, $sql);
        if ($consulta){
            
        
            
       
        }
            ?>
        </main>
        <?php include 'footer.php';?>
        
    </body>
</html>
