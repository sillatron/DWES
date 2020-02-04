<?php

require_once 'modelos/NotasModels.php';

class NotasController{
    
    public function save(){
        if(!isset($_POST['altaNota'])){
            $usuario = new UsuariosModels();
            $todos=$usuario->get_all();
            require_once 'vistas/notas/crearNota.phtml';
        }else{
            $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $idU = isset($_POST['idU']) ? $_POST['idU'] : false;
            var_dump($idU);
            
            if($titulo && $descripcion && $idU != "0"){
                $nota = new NotasModels($titulo, $descripcion);
                $nota->setId_usuario($idU);
                $nota->save();
                header("Location:index.php?c=Usuarios&&a=TodosUsuarios");
            }else{
                $usuario = new UsuariosModels();
                $todos=$usuario->get_all();
                require_once 'vistas/notas/crearNota.phtml';
            }
        }        
    }
    
    public function todasNotas(){
        $notas = new NotasModels();
        $todas = $notas->get_all();
        
        require_once 'vistas/notas/listarNotas.phtml';
    }
    
    public function listarNotasUsuario(){
        $idU = $_GET['idU'];
        $notas = new NotasModels();
        $notas->setId_usuario($idU);
        $notasUsuario = $notas->get_notas_user();
        
        require_once 'vistas/notas/notasUsuario.phtml';
    }    
}


?>