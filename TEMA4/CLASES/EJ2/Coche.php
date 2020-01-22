<?php

require_once 'Vehiculo.php';
class Coche extends Vehiculo{
    private $cilindrada;
    
    function getCilindrada() {
        return $this->cilindrada;
    }
    
 }

