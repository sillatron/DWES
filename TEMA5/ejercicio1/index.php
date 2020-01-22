<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
        <link type="text/css" rel="stylesheet" href="estatico/css/estilos.css">
    </head>
    <body>
        <?php
        session_start();
        require_once './modelos/conexionBD.php';
        require_once './controladores/UsuariosController.php';
        require_once './controladores/NotasController.php';
        
        if(!isset($_GET['c']) || !isset($_GET['a'])){
            $controlador = new UsuariosController();
            $controlador->index();
        }else{
            $nombreControlador = $_GET['c'].'Controller';
            if(class_exists($nombreControlador)){
                $controlador = new $nombreControlador();
                if(method_exists($controlador, $_GET['a'])){
                    $action = $_GET['a'];
                    $controlador->$action();
                }else echo "La página que buscas no existe";
            }else echo "La página que buscas no existe";
        }
        ?>
    </body>
</html>
