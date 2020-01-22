<?php

class usuariosModels extends DataBase{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $fecha;
    private $conn;
    
    public function __construct($nombre=null, $apellidos=null, $email=null, $pass=null) {
        $this->conn= parent::conectaBD();
        if (isset($nombre)) $this->nombre=$nombre;
        if (isset($apellidos)) $this->apellidos=$apellidos;
        if (isset($email)) $this->email=$email;
        if (isset($pass)) $this->password=$pass;
    }
    
    ###################
    # GETTERS & SETTERS
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }
    ###################
    ###################
        
    public function get_all(){
        $consulta = $this->conn->query("select * from usuarios order by id desc");
        return $consulta;
    }
    
    public function save(){
        $sql = "insert into usuarios values(null, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', curdate())";
        $save = $this->conn->exec($sql);
        
        $resultado = false;
        
        if($save){
            $resultado = true;
        }
        
        return $resultado;
    }
    
    public function delete(){
        $sql = "delete from usuarios where id ={$this->getId()}";
        $borrado=$this->conn->exec($sql);
        
        return $borrado;
    }
}
