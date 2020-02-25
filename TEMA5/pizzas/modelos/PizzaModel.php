<?php

class PizzaModel extends DataBase{
    private $id;
    private $titulo;
    private $imagen;
    private $descripcion;
    private $conn;
    
    function __construct($titulo=null,$imagen=null,$descripcion=null) {
        $this->conn= parent::conectaBD();
        if (isset($titulo)) $this->titulo=$titulo;
        if (isset($imagen)) $this->imagen=$imagen;
        if (isset($descripcion)) $this->descripcion=$descripcion;
    }
    
    # GETTERS AND SETTERS
    #####################
    
    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getImagen() {
        return $this->imagen;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    
    #####################
    #####################
    
    public function get_pizzas(){
        return $this->conn->query("select * from oferta order by id desc");
    }
    
    public function save(){
        $this->conn->exec("insert into oferta values (null, '{$this->getTitulo()}', '{$this->getImagen()}', '{$this->getDescripcion()}');");
    }
    
    public function get_one(){
        $consulta = $this->conn->query("select * from oferta where id = {$this->getId()}");
        return $consulta;
    }
    
    public function update(){
        $this->conn->exec("update oferta set titulo = '{$this->getTitulo()}', imagen = '{$this->getImagen()}', descripcion = '{$this->getDescripcion()}' where id = {$this->getId()}");
    }
    public function delete(){
        return $this->conn->query("delete from oferta where id={$this->getId()}");
    }
}
