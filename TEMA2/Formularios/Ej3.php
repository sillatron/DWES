<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ale guapo</title>
    </head>
    <body>
        <form action="Ej3.php" method="POST">
        <label>Euros: </label>
        <input type="number" name="euros">
        <br><br>
        <input type="submit">
        <br><br>
        <?php
            $euro=$_POST['euros'];
            $pesetas=$euro*166;
            echo 'Pesetas: '.$pesetas;
        ?>
    </body>
</html>
