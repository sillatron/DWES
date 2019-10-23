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
        if(!isset($_POST['horas'])){?>
            
        <form action="Ej2.php" method="POST">
        <label>Horas: </label>
        <input type="number" name="horas">
        <br><br>
        <input type="submit">
        <br><br>
        
        </form>    
            
       <?php } else {
        $horas=$_POST['horas'];
        $total=0;
        if($horas>40){
            $extras=$horas-40;
            $total+=16*$extras;
            $horas-=$extras;
        }
        $total+=12*$hora;
        echo 'Tu sueldo es: '.$total;
        
       }
        ?>
    </body>
</html>
