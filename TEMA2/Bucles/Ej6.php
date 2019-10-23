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
        $cont=0;
        while ($cont<=100){
            if($cont%5==0){
                echo $cont." ";
            }
            $cont++;
        }
        ?>
    </body>
</html>
