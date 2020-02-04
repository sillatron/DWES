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
                        header("Location: index.php");
                    }
                    
                }
            }
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $actualiza_oferta = new PizzaModel();
                $actualiza_oferta->setId($id);
                $actualiza_oferta->setTitulo($titulo);
                $actualiza_oferta->setDescripcion($descripcion);
                $fila = $actualiza_oferta->get_one();
                $imagen_antigua = $fila->imagen;
                if(isset($_FILES['imagen'])){
                    $imagen_antigua = $_FILES['imagen']['name'];
                }
                var_dump($imagen_antigua);
                var_dump($actualiza_oferta);
                $actualiza_oferta->setImagen($imagen_antigua);
                $actualiza_oferta->update();
            }
            //header("location: index.php");
        }
    }
    
    public function delete(){
        $id = $_GET['id'];
        $pizza = new PizzaModel();
        $pizza->setId($id);
        $borrar=$pizza->delete();
        header("Location:index.php");
    }
}

