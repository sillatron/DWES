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
        <table border="1">
            <thead>
                <tr>
                    <th><?php echo $array["Accion"][0]?></th>
                    <th><?php echo $array[4]?></th>
                    <th><?php echo $array[8]?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $array[1]?></td>
                    <td><?php echo $array[5]?></td>
                    <td><?php echo $array[9]?></td>
                </tr>
                <tr>
                    <td><?php echo $array[2]?></td>
                    <td><?php echo $array[6]?></td>
                    <td><?php echo $array[10]?></td>
                </tr>
                <tr>
                    <td><?php echo $array[3]?></td>
                    <td><?php echo $array[7]?></td>
                    <td><?php echo $array[11]?></td>
                </tr>
                <tr>
                    <td><?php echo $array[0]?></td>
                    <td><?php echo $array[0]?></td>
                    <td><?php echo $array[0]?></td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
