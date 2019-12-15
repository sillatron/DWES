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
                <form action="entrada.php" method="POST">
                    <div>
                        <label>Titulo</label>
                        <input type="text" name="titulo">
                    </div>
                    <div>
                        <label>Descripción</label>
                        <textarea name="descripcion"></textarea>
                    </div>
                             <?php include 'Conexion.php';?>
            <?php
        $sql="select id,nombre from categorias";
        $consulta= mysqli_query($conexion, $sql);
        if ($consulta){?>
                    
            <select name="categoria">
        <?php
            while ($fila=mysqli_fetch_assoc($consulta)){

                echo '<option value="'.$fila[id].'">'.$fila[nombre].'</option>';

                    }
                }else{
                echo '0 Registros';}
                    ?>
            </select>
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
                    $titulo = $_POST['titulo'];
                    if(empty($titulo)){
                        $errores["titulo"]="el titulo no es válido";
                    }
                    $descripcion=$_POST['descripcion'];
                    if(empty($descripcion)){
                        $errores["descripcion"]="la descripción no es válida";
                    }
                    if(count($errores)==0){
                        $email=$_SESSION['usuario']['email'];
                        $sql2="select id from usuarios where email='$email'";
                        $consulta2 = mysqli_query($conexion, $sql2);
                        $idu = (int)mysqli_fetch_assoc($consulta2);
                        $idc=(int)$_POST['categoria'];
                        $sql3="insert into entradas values(null,$idu,$idc,'$titulo','$descripcion',curdate())";
                        $consulta3 = mysqli_query($conexion, $sql3);
                        
                    } else {
                         foreach($errores as $error){
                        ?> <p><?= $error.'<br>' ?></p>
                    <?php }
                    }
                    
                }
                ?>

            </div>
        </aside>
           
        </main>
    </body>
</html>