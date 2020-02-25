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
                $of = $oferta->get_one()->fetchObject();
            }
            require_once 'vistas/nuevaOferta.phtml';
            
            
        }else{
            $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $noImagen = true;
            
            if(isset($_FILES['imagen'])){
                $noImagen = false;
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
                }
                $_FILES['imagen'] = null;
            }
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $actualiza_oferta = new PizzaModel();
                $actualiza_oferta->setId($id);
                $actualiza_oferta->setTitulo($titulo);
                $actualiza_oferta->setDescripcion($descripcion);
                if($noImagen){
                    $consulta = $actualiza_oferta->get_one()->fetchObject();
                    $filename = $consulta->imagen;
                }
                $actualiza_oferta->setImagen($filename);
                $actualiza_oferta->update();
            }else{
                
                $filename = empty($filename) ?  'default.png' : $filename;
                $oferta = new PizzaModel($titulo, $filename, $descripcion);
                $oferta->save();
            }
            header("location: index.php");
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

