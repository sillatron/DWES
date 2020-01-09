<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'gato.php';
        $gato1 = new Gato('macho');
        echo $gato1 -> come("pescado");
        echo $gato1;
        $gato2 = new Gato('hembra','romana');
        echo $gato2;
        echo $$gato2 ->maulla();
        $gato3 = new Gato();
        echo $gato3 ->aseate();
        echo $gato3;        
        ?>
    </body>
</html>
