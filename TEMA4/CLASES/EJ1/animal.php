<?php
// Declaramos como abstracta clase animal
abstract class Animal {
private $sexo;
public function __construct($s){
$this->sexo = $s;
}
public function __toString() {
return "Sexo: $this->sexo";
}
public function getSexo() {
return $this->sexo;
}
public function duerme() {
return "Zzzzzzz";
}
public function aseate() {
return "Me gusta asearme, soy un animal.<br>";
}}
?>

