<?php
require_once 'modelos/UsuariosModels.php';

class UsuariosController{
    public function index(){
        require_once 'vistas/usuarios/principal.phtml';
    }
    
    public function TodosUsuarios(){
        $usuario = new UsuariosModels();
        $todos = $usuario->get_all();
        
        require_once 'vistas/usuarios/listadoUsuarios.phtml';
    }
    
    public function save(){
        if(!isset($_POST['altaUsuario'])){
            require_once 'vistas/usuarios/crearUsuario.phtml';
        }else{
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $pass = isset($_POST['contrasena']) ? $_POST['contrasena'] : false;
            
            if($nombre && $apellidos && $email && $pass){
                $usuario = new UsuariosModels($nombre,$apellidos,$email,$pass);
                $usuario->save();
            }
            header("Location:index.php?c=Usuarios&&a=TodosUsuarios");
        }
    }
    
    public function remove(){
        $id = $_GET['id'];
        $usuario = new usuariosModels();
        $usuario->setId($id);
        $borrar=$usuario->delete();
        header("Location:index.php?c=Usuarios&&a=TodosUsuarios");
    }
}

?>