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
         <?php include 'Conexion.php';?>
            <?php
        $sql="select * from Coches";
        $consulta= mysqli_query($conexion, $sql);
        if ($consulta){?>
            <table>
                <caption>Coches del concesionario</caption>
                <tbody>
                <tr><th> Identificador</th>
                <th> Marca</th>
                <th> Modelo</th>
                <th> Precio</th>
                <th> Stock</th>
                <th> Modificar</th>
                <th> Borrar</th></tr>
        <?php
        while ($fila=mysqli_fetch_assoc($consulta)){?>
                <tr><td><?= $fila['id']?></td>
                <td><?= $fila['marca']?></td>
                <td><?= $fila['modelo']?></td>
                <td><?= $fila['precio']?></td>
                <td><?= $fila['stock']?></td>
                <td><a  href="modificar.php?id=<?=$fila['id']?>"><img src="lapiz.jpg"></a></td>
                <td><a  href="borrar.php?id=<?=$fila['id']?>"><img src="papelera.png"></a></td>
            </tr>
                <?php
                }
                }else{
                echo '0 Registros';}
                mysqli_close($conexion);

                        
            ?>
            </table>
        </main>
        <?php include 'footer.php';?>
        
    </body>
</html>
