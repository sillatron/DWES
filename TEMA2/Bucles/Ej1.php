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
            
        <form action="Ej1.php" method="POST">
        <label>Horas: </label>
        <input type="number" name="horas">
        <br><br>
        <input type="submit">
        <br><br>
        
        </form>    
            
       <?php } else {
        $horas=$_POST['horas'];
        if($horas>6 and $horas<12){
            echo "Buenos días";
        }elseif($horas>=13 and $horas<=20){
            echo "Buenas tardes";
        } else{
            echo "Buenas noches";
        }
       }
        ?>
    </body>
</html>
