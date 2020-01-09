<?php
include_once 'Animal.php';
// Gato es subclase de Animal utilizando extends
class Gato extends Animal {
private $raza;
public function __construct($s="macho", $r="siames") {
parent:: __construct($s); //llamamos a la clase padre con parent
$this->raza = $r;
}
public function __toString() {
return parent:: __toString() . "<br>Raza: $this->raza";
}
public function maulla() {
return "Miauuuu<br>";
}
public function ronronea() {
return "mrrrrrr<br>";
}
public function come($comida) {
if ($comida == "pescado") {
return "Hmmmm, gracias<br>";
} else {
return "Lo siento, yo solo como pescado<br>";
}
}
public function peleaCon($contrincante) {
if ((parent::getSexo()) == "hembra") {
echo "no me gusta pelear<br>";
} else if (($contrincante->getSexo()) == "hembra") {
echo "no me gusta pelear<br>";
} else {
echo "ven aquí que te vas a enterar<br>";
}
}
}
?>

