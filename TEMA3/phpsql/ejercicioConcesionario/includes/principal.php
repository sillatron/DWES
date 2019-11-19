<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
                <link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
    </head>
    <body>
        <h2>Este es el alta</h2>
        <div class="usuario">
            <div class="registro">    
                <form action="principal.php" method="POST">
                    <div>
                        <label>Email: </label>
                        <input type="email" name="email" maxlength="100">
                    </div>
                    <div>
                        <label>Contraseña: </label>
                        <input type="password" name="password" maxlength="100">
                    </div>
                    <div>
                        <label>Nombre: </label>
                        <input type="text" name="nombre" maxlength="100">
                    </div>
                    <div>
                        <label>Apellidos: </label>
                        <input type="text" name="apellidos" maxlength="100">
                    </div>
                    <div>
                        <label>Edad: </label>
                        <input type="number" name="edad" maxlength="2">
                    </div>
                    <div>
                        <label>Dirección: </label>
                        <input type="text" name="direccion" maxlength="200">
                    </div>
                    <div>
                        <input type="submit" name="alta">
                    </div>
                </form>
            </div>
            <h2>Este es el Login</h2>
            <div class="login">
                <form action="principal.php" method="POST">
                    <div>
                        <label>Email: </label>
                        <input type="email" name="email" maxlength="100">
                    </div>
                    <div>
                        <label>Contraseña: </label>
                        <input type="password" name="password" maxlength="100">
                    </div> 
                    <input type="submit" name="login">
                </form>
            </div>
        </div>
        
        <?php
            session_start();
            include 'conexion.php';
            if(isset($_POST['alta'])){
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $edad = (int)$_POST['edad'];
                $direccion = $_POST['direccion'];
                $segura = password_hash($pass, PASSWORD_BCRYPT, ['cost'=>4]);
                $sql = "insert into Usuarios values('$email','$pass','$segura','$nombre','$apellidos',$edad, '$direccion')";
                mysqli_query($conexion, $sql);
                $_SESSION['usuario'] = $nombre;
                echo $_SESSION['usuario'];
                header("Location: index.php");
            }
            if(isset($_POST['login'])){
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $sql = "select nombre from Usuarios where Email='$email' and Pasword='$pass'";
                $consulta = mysqli_query($conexion, $sql);
                if($consulta){
                    session_start();
                    $fila=mysqli_fetch_assoc($consulta);
                    $_SESSION['usuario'] = $fila['nombre'];
                    header("Location: index.php");
                }
                else{
                    echo 'Menudos programadores mas patatas';
                }
            }
        ?>
        
    </body>
</html>
