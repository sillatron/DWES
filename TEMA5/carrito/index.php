<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizzería Aguada</title>
        <link type="text/css" rel="stylesheet" href="estatico/css/estilos.css">
    </head>
    <body>
        <?php
        session_start();
        require_once './modelos/conexionBD.php';
        require_once './controladores/PizzaController.php';
        require_once './modelos/PizzaModel.php';
        
        
        if(!isset($_GET['c']) || !isset($_GET['a'])){
            $controlador = new PizzaController();
            $controlador->index();
        }else{
            $nombreControlador = $_GET['c'].'Controller';
            if(class_exists($nombreControlador)){
                $controlador = new $nombreControlador();
                if(method_exists($controlador, $_GET['a'])){
                    $action = $_GET['a'];
                    $controlador->$action();
                }else echo "El método que buscas no existe";
            }else echo "La página que buscas no existe";
        }
        ?>
    </body>
</html>
