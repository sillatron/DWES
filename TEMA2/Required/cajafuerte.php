<?php
//if (!isset ($_POST['numeroIntroducido'])){
    $oportunidades =4;
    $numeroIntroducido=0;
    $codigo= rand(1000,9999);
require_once 'cajaform.php';
//}else {
    $numeroIntroducido = (int)$_POST['codigo'];
//}
if($numeroIntroducido==$codigo){
    echo 'has ganado';
}elseif ($oportunidades==0) {
    echo 'has perdido';
} else {
    $oportunidades--;
    echo 'has fallado te quedan '.$oportunidades.' oportunidades';
    if($numeroIntroducido<$codigo){
        echo ' el codigo es menor';
    } else {
        echo ' el codigo es mayor';
    }
require_once 'cajaform.php';
}