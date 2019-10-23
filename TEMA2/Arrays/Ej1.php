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
        $longitud=0;
        $array=array(8);
        
        for ($numero=0;$numero<8;$numero++){
          $array[$numero]= rand(0,10);
           
        }
        foreach ($array as $elemento){
        echo $elemento." ";
        $longitud++;
        }
        echo"<br>longitud=".$longitud;
        
        sort($array);
        foreach ($array as $elemento){
        echo "   ".$elemento." ";
        }
        array_reverse($array);
        foreach ($array as $elemento){
        echo " ".$elemento." ";
        }
        ?>
    </body>
</html>
