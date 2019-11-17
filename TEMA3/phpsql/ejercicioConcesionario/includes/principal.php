<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
                   <h2>Este es el alta</h2>
                   <div class="usuario">
                       <div>    
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
                       </div>
            </form>
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
                    <input type="submit" name="login">
                </div>
              
                    </form>
                           
                </div>
        <?php
            
        ?>
    </body>
</html>
