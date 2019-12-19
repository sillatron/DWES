<!DOCTYPE html>
<html>
    <?php if (!isset($_SESSION)) session_start(); ?>
    <head>
        
        <meta charset="UTF-8">
        <title></title>
                <link rel="stylesheet" type="text/css" href="../css/index.css">
               
    </head>
    <body>
        
        <?php include 'header.php';
        include 'menu.php';?>
        <main>
            <div class="contenido">
                <form action="categoria.php" method="POST">
                    <div>
                        <label>Titulo</label>
                        <input type="text" name="titulo">
                    </div>
                    <input type="submit" name="guardar">
                </form>
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
                <?php
                if (isset ($_POST['guardar'])) {
                    $errores=[];
                    include 'conexion.php';
                    $titulo = $_POST['titulo'];
                    if(empty($titulo)){
                        $errores["titulo"]="el titulo no es válido";
                    }else {
                        if(!isset($errores['titulo'])){
                            $sql = "insert into categorias values(null,'$titulo')";
                            $hayConsulta = mysqli_query($conexion, $sql);
                            if($hayConsulta){
                                header("Location: inicio.php");
                            }else {
                                echo 'No se ha podido crear la categoria';
                            }

                        }
                    }
                }
                ?>

            </div>
        </aside>
           
        </main>
    </body>
</html>