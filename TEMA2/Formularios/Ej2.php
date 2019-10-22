<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <form action="Ej2.php" method="POST">
        <label>Numero 1: </label>
        <input type="number" name="numero1">
        <br><br>

        <label>Numero 2: </label>
        <input type="number" name="numero2">
        <br>
        <input type="submit">
        <br><br>
    </form>
        <?php
            $x= $_POST['numero1'];
            $y= $_POST['numero2'];
            $suma=$x+$y;
            $resta=$x-$y;
            $multiplicacion=$x*$y;
            $division=$x/$y;
            echo 'suma: '.$suma.'<br>'. 'resta: '.$resta.'<br>'. 'multiplicación: '.$multiplicacion.'<br>'. 'division: '.$division;
        ?>
    </body>
</html>
