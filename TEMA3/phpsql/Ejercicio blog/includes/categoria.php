<!DOCTYPE html>
<html>
    <?php session_start(); ?>
    <head>
        
        <meta charset="UTF-8">
        <title></title>
                <link rel="stylesheet" type="text/css" href="../css/index.css">
               
    </head>
    <body>
        
        <?php include 'header.php';?>
        <main>
            <div class="contenido">
                <form action="categoria" method="POST">
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
                session_start();
                $errores=[];
                    if(isset($_POST['salir'])){
                        include 'salir.php';
                        
                    }elseif (isset ($_POST['guardar'])) {
                        $titulo = $_POST['titulo'];
                        if(empty($pass)){
                            $errores["titulo"]="el titulo no es válido";
                        } else {
                            $titulo = $_POST['titulo'];
                            if(count($errores)==0){
                                $sql = "insert into categorias values(null,'$titulo')";
                                mysqli_query($conexion, $sql);
                                $_SESSION['usuario'] = $nombre;
                                echo $_SESSION['usuario'];
                                header("Location: index.php");

                            }else{
                                foreach($errores as $error){
                                    ?> <p><?= $error.'<br>' ?></p>
                                <?php }
                            }
                
                        }
    
                    }
                ?>

            </div>
        </aside>
           
        </main>
    </body>
</html>