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
            <h2>Este es el alta</h2>
             <form action="alta.php" method="POST">
                <div>
                    <label>Marca: </label>
                    <input type="text" name="marca" maxlength="50">
                </div>
                <div>
                    <label>Modelo: </label>
                    <input type="text" name="modelo" maxlength="100">
                </div>

                <div>
                    <label>Precio: </label>
                    <input type="number" name="precio" maxlength="10">
                </div>
                <div>
                    <label>Stock: </label>
                    <input type="number" name="stock" maxlength="20">
                </div>
                <div>
                    <input type="submit" name="submit">
                </div>
            </form>
        <?php
            if(isset($_POST['submit'])){
            include 'Conexion.php';
            $modelo=$_POST['modelo'];
            $marca=$_POST['marca'];
            $precio=(int)$_POST['precio'];
            $stock=(int)$_POST['stock'];
            $sql="insert into coches values(null,'$modelo','$marca','$precio','$stock')";
            $insert= mysqli_query($conexion, $sql);
            mysqli_close($conexion);
            header("Location: index.php");
        }      
        ?>
        </main>
        
        <?php include 'footer.php';?>
        
    </body>
</html>
