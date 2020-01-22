<?php
require_once 'modelos/PizzaModel.php';

class PizzaController {
    
    public function index(){
        $pizzasOfertadas = new PizzaModel();
        $pizzas = $pizzasOfertadas->get_pizzas();
        
        require_once 'vistas/pizzas.phtml';
    }
    
    public function NuevaOferta(){
        if(!isset($_POST['nOferta'])){
            if(isset($_GET['id'])){
                $oferta = new PizzaModel();
                $oferta->setId($_GET['id']);
                $of = $oferta->get_one();
            }
            require_once 'vistas/nuevaOferta.phtml';
            
            
        }else{
            $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            
            if(isset($_FILES['imagen'])){
                $extensiones = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if(in_array($mimetype, $extensiones)){
                    $directorio = 'imgPizzas';
                    if(!is_dir($directorio)){
                        mkdir($directorio, 0777, true);
                    }
                    move_uploaded_file($file['tmp_name'], $directorio.'/'.$filename);

                    if($titulo && $filename && $descripcion){
                        $oferta = new PizzaModel($titulo, $filename, $descripcion);
                        $oferta->save();
                        header("location: index.php");
                    }
                }
            }else{
                $id = $_GET['id'];
                $imagen = $actualizar->get_one()->imagen;
                $actualizar->setId($id);
                $actualizar = new PizzaModel($titulo, $imagen, $descripcion);
                $actualizar->update();
                header("Location:index.php");
            }
        }
    }
}
