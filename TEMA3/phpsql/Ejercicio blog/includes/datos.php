<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
    </head>
    <body>
        <?php
        include 'header.php';
        include 'menu.php';
        ?>
        <main>
            <div class="contenido">

                             <?php include 'Conexion.php';?>
            <?php
                 $email=$_SESSION['usuario']['email'];
                 $sql2="select * from usuarios where email='$email'";
                 $consulta2 = mysqli_query($conexion, $sql2);
         if ($consulta2){
              ?>           
                    <table>
                        <tr><th> ID</th>
                        <th> Nombre</th>
                        <th> Apellidos</th>
                        <th>Contraña</th>
                        <th> Fecha</th>
                    </tr>
                <?php
                while ($fila=mysqli_fetch_assoc($consulta2)){?>
                        <tr><td><?= $fila['id']?></td>
                        <td><?= $fila['nombre']?></td>
                        <td><?= $fila['apellidos']?></td>
                        <td><?= $fila['password']?></td>
                        <td><?= $fila['fecha']?></td>
                    </tr>
                        <?php
                        }
                        }else{
                        echo '0 Registros';}
                        mysqli_close($conexion);


                    ?>
                    </table>
             
            </div>
            <aside>
            <div id="formularios">
                <form action="index.php" method="POST">
                    <div>
                        <h2>Buscar</h2>
                        <input type="text" name="buscar">
                    </div>

                    <div>
                        <input type="submit" name="buscador" value="Buscar">
                    </div>
                </form>
                
                
                      <div class="registro">    
                        <?php include 'lateral.php';?>
 

                </div>
                </main>
    </body>
</html>
