<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
                <link rel="stylesheet" type="text/css" href="../css/index.css">
               
    </head>
    <body>
        
        <?php include 'header.php';?>
        <main>
            <?= $_SESSION['usuario'] ?>
            <div class="contenido">
                <p>En construcción</p>
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
                <h2>Identifícate</h2>
                    <div class="login">
                        <form action="index.php" method="POST">
                            <div>
                                <label>Email: </label>
                                <input type="email" name="email" maxlength="100">
                            </div>
                            <div>
                                <label>Contraseña: </label>
                                <input type="password" name="password" maxlength="100">
                            </div> 
                            <input type="submit" name="login" value="Entrar">
                        </form>
                    </div>
                <h2>Regístrate</h2>
                      <div class="registro">    
                        <form action="index.php" method="POST">
                            <div>
                                <label>Nombre: </label>
                                <input type="text" name="nombre" maxlength="100">
                            </div>
                            <div>
                                <label>Apellidos: </label>
                                <input type="text" name="apellidos" maxlength="100">
                            </div>
                            <div>
                                <label>Email: </label>
                                <input type="email" name="email" maxlength="100">
                            </div>
                            <div>
                                <label>Contraseña: </label>
                                <input type="password" name="password" maxlength="100">
                            </div>
                            <div>
                                <input type="submit" name="Registrate" value="Registro">
                            </div>
                        </form>

                </div>

            </div>
        </aside>
           
        </main>
        
        <?php
            $errores=[];
            include 'conexion.php';
            if(isset($_POST['Registrate'])){
                $email = $_POST['email'];
                if(empty($email)||!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $errores["email"]="El email no es válido";
                }
                
                $pass = $_POST['password'];
                if(empty($pass)){
                    $errores["password"]="la contraseña no es válida";
                }
                $nombre = $_POST['nombre'];
                if(empty($nombre)){
                    $errores["nombre"]="El nombre no es válido";
                }
                $apellidos = $_POST['apellidos'];
                if(empty($apellidos)){
                    $errores["apellidos"]="Los apellidos no son válidos";
                }
                $segura = password_hash($pass, PASSWORD_BCRYPT, ['cost'=>4]);
                if(count($errores)==0){
                    $sql = "insert into usuarios values(null,'$nombre','$apellidos','$email','$segura', curdate())";
                    mysqli_query($conexion, $sql);
                    $_SESSION['usuario'] = $nombre;
                    echo $_SESSION['usuario'];
                    header("Location: index.php");
                
                }
                else{
                    foreach($errores as $error){
                        ?> <p><?= $error.'<br>' ?></p>
                    <?php }
                }
            }
            if(isset($_POST['login'])){
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $sql = "select * from usuarios where email='$email'";
                $consulta = mysqli_query($conexion, $sql);
                $fila = mysqli_fetch_assoc($consulta);
                $verify = password_verify($pass, $fila['password']);
                
                if($fila && $verify){
                    session_start();
                    $fila=mysqli_fetch_assoc($consulta);
                    var_dump($fila);
                    $_SESSION['usuario'] = $fila['nombre'];
                    header("Location: inicio.php");
                }
                else{
                    echo 'Menudos programadores mas patatas';
                }
            }
        ?>
       <?php include 'footer.php';?>  
    </body>
   
</html>


