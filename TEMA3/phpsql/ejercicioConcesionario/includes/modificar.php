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
        
            <h2>Este es el modificado de coches</h2>
            
        <main>
          
             
            <?php
            if(!isset($_POST['submit'])){
           
                $identif=(int)$_GET['id'];
                
            $sql="select * from Coches where id=$identif";
            
            $consulta= mysqli_query($conexion, $sql);
          
            $fila= mysqli_fetch_assoc($consulta);
            
            
            ?>
            <form action="modificar.php" method="POST">
                 <input type="text" hidden="true" value=<?= $identif ?> name="iden">
                <div>
                    <label>Marca: </label>
                    <input type="text" name="marca" maxlength="50" value=<?= $fila['marca']?>>
                </div>
                <div>
                    <label>Modelo: </label>
                    <input type="text" name="modelo" maxlength="100" value=<?= $fila['modelo']?>>
                </div>

                <div>
                    <label>Precio: </label>
                    <input type="number" name="precio" maxlength="10" value=<?= $fila['precio']?>>
                </div>
                <div>
                    <label>Stock: </label>
                    <input type="number" name="stock" maxlength="20" value=<?= $fila['stock']?>>
                </div>
                <div>
                    <input type="submit" name="submit">
                </div>
            </form>
            <?php
            
            }else{
                $identif =(int)$_POST['iden'];
                $marca=$_POST['marca'];
                $modelo=$_POST['modelo'];
                $precio=(int)$_POST['precio'];
                $stock=(int)$_POST['stock'];
                $sSQL="Update Coches Set marca='$marca', modelo='$modelo', precio=$precio, stock=$stock where id=$identif";
                $modificar= mysqli_query($conexion, $sSQL);
                header("Location: index.php");
                mysqli_close($conexion);
            }
        ?>
        </main>
        <?php include 'footer.php';?>
        
    </body>
</html>

