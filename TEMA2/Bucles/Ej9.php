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
            
        <form action="Ej9.php" method="POST">
        <label>Numero: </label>
        <input type="number" name="numero">
        <br><br>
        <input type="submit">
        <br><br>
        
        </form>    
            
       <?php } else {
        $numero=$_POST['numero'];
        $cont=0;
        $total=0;
        while ($cont<=$numero){
            if($numero%$cont==0){
                $total+=$cont;
            }
            $cont++;
        }
       
       if($total==$numero){
           echo 'es primo';
       } else {
           echo 'no es primo';
}
       }
       
        ?>
    </body>
</html>
