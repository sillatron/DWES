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
        $tipo=array(
            array("Accion"=> "GTA5", "Call of Duty", "PUGB"),
            array("Aventura"=> "Assasin Creed","Tom Raider", "Last of us"),
            array("Deporte"=> "FIFA", "PES", "MOTO G")
            );
        ?>
        <table width="100%" border="1">



         <?php

           foreach($tipo as $resultado => $value)
              {


         ?>
            <tr> 
                   <th>
                       <?php echo key($value); ?>
                 </th>
                         <?php foreach($value as $resultado=>$value)
                           {
                         ?>
                  <td>
                        <?php echo $value;?>
                 </td>
                        <?php
                         }
                        ?>
            </tr>




        <?php
            }
           ?>

        </table>
    </body>
</html>
