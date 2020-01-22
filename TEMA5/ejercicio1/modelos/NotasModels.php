<?php

class NotasModels extends DataBase{
    private $id;
    private $id_usuario;
    private $titulo;
    private $descripcion;
    private $fecha;
    private $conn;
    
    function __construct($titulo=null,$descripcion=null) {
        $this->conn= parent::conectaBD();
        if (isset($titulo)) $this->titulo=$titulo;
        if (isset($descripcion)) $this->descripcion=$descripcion;
    }
    
    ###################
    # GETTERS & SETTERS
    function getId() {
        return $this->id;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }
    ###################
    ###################
    
    public function get_notas_user(){
        $sql = "select notas.titulo, notas.descripcion, notas.fecha, usuarios.nombre, usuarios.apellidos from notas, usuarios where notas.id_usuario = usuarios.id and {$this->getId_usuario()} = notas.id_usuario order by notas.id desc";
        $consulta = $this->conn->query($sql);
        
        return $consulta;
    }
    
    public function get_all(){
        $consulta = $this->conn->query("select notas.titulo, notas.descripcion, notas.fecha, usuarios.nombre, usuarios.apellidos from notas, usuarios where notas.id_usuario=usuarios.id");
        return $consulta;
    }
    
    public function save(){
        $sql = "insert into notas values(null, {$this->getId_usuario()}, '{$this->getTitulo()}', '{$this->getDescripcion()}', curdate())";
        $save = $this->conn->exec($sql);
        
        $resultado = false;
        if($save){
            $resultado = true;
        }
        
        return $resultado;
    }
}

?>