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
        <form action="Ej4.php" method="POST">
        <label>Radio: </label>
        <input type="number" name="radio">
        <br><br>
        <input type="submit">
        <br><br>
        <?php
            define ('pi',3.1416);
            $radio=$_POST['radio'];
            $longitud=2*pi*$radio;
            $area=pi* pow($radio, 2);
            echo 'longitud: '.$longitud.'<br>'. 'area: '.$area.'<br>' ;
        ?>
    </body>
</html>
