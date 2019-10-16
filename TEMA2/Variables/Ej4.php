<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        define ('pi',3.1416);
        $radio=12;
        $longitud=2*pi*$radio;
        $area=pi* pow($radio, 2);
        echo 'longitud: '.$longitud.'<br>'. 'area: '.$area.'<br>' ;
        ?>
    </body>
</html>
