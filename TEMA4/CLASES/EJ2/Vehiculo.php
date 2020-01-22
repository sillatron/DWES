<?php

abstract class Vehiculo{
    private static $vehiculocreado;
    private $kmrecorridos;

    static function getVehiculocreado() {
        return self::$vehiculocreado;
    }

    function getKmrecorridos() {
        return $this->kmrecorridos;
    }
    
    public function getKilometraje() {
        return $this->kmrecorridos;
    }
    public function recorre($km) {
        $this->kmrecorridos += $km;
        Vehiculo::$kilometrajeTotal += $km;
}


}

