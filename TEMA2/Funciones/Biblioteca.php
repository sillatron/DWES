<?php
//esCapicua
function esCapicua($n){
    $invertido="";
    for ($i=$n.lenght;$i>=$n;$i--){
        $invertido+=i;
    }
    if($invertido==$n){
        return true;
    } else {
        return false;
    }
}//fin esCapicua

//esPrimo
function esPrimo($n){
     $cont=0;
        $total=0;
        while ($cont<=$numero){
            if($numero%$cont==0){
                $total+=$cont;
            }
            $cont++;
        }
       
       if($total==$numero){
           return true;
       } else {
           return false;
}
}//fin esPrimo

//potencia
function potencia($base,$exp){
    $total=0;
    $cont=$base;
    while ($cont>0){
        $total*=$base;
        $cont--;
    }
    return $total;
}//fin potencia

?>