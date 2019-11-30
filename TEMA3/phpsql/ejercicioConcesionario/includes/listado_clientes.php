<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Concesionario</title>
        <link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
    </head>
    <body>
        
        <?php
        session_start();
        if(!isset($_SESSION['usuario'])) include 'principal.php';
        else{
        include 'header.php';
        include 'navegacion.php';?>
        <main>
            <h2>Este es el listado de coches</h2>
         <?php include 'Conexion.php';?>
            <?php
        $sql="select id,nombre from Clientes";
        $consulta= mysqli_query($conexion, $sql);
        if ($consulta){?>
            <form action="listado_clientes.php" method="POST">
            <select name="cliente">
        <?php
            while ($fila=mysqli_fetch_assoc($consulta)){

                echo '<option value="'.$fila[id].'">'.$fila[nombre].'</option>';

                    }
                }else{
                echo '0 Registros';}
                

                        
                ?><input type="submit" name="submit" value="Mostrar coches">
            </select>
            </form>
            <?php
            if(isset($_POST['submit'])){
                $id=(int)$_POST['cliente'];
                $sqlcoche="SELECT c.modelo, c.marca, e.cantidad, e.fecha FROM Clientes cl INNER JOIN Coches c INNER JOIN Encargos e ON c.id=e.coche_id AND e.cliente_id=cl.id WHERE cl.id=$id";
                $consultaco= mysqli_query($conexion, $sqlcoche);
                if ($consultaco){?>
                    <table>
                        <tr><th> Modelo</th>
                        <th> Marca</th>
                        <th> Cantidad</th>
                        <th> Fecha</th>
                    </tr>
                <?php
                while ($fila=mysqli_fetch_assoc($consultaco)){?>
                        <tr><td><?= $fila['modelo']?></td>
                        <td><?= $fila['marca']?></td>
                        <td><?= $fila['cantidad']?></td>
                        <td><?= $fila['fecha']?></td>
                    </tr>
                        <?php
                        }
                        }else{
                        echo '0 Registros';}
                        mysqli_close($conexion);


                    ?>
                    </table>
        </main>
        <?php include 'footer.php';
        }
        }?>
        
    </body>
</html>
