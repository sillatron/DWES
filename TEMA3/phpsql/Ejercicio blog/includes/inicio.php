<!DOCTYPE html>
<html>
    <?php if (!isset($_SESSION)) session_start(); ?>
    <head>
        
        <meta charset="UTF-8">
        <title></title>
                <link rel="stylesheet" type="text/css" href="../css/index.css">
               
    </head>
    <body>
        
        <?php include 'header.php';
        include 'menu.php';
        ?>
        <main>
            <div class="contenido">
                <p>En construcción</p>
            </div>
            <aside>
            <div id="formularios">
                <form action="index.php" method="POST">
                    <div>
                        <h2>Buscar</h2>
                        <input type="text" name="buscar">
                    </div>

                    <div>
                        <input type="submit" name="buscador" value="Buscar">
                    </div>
                </form>
                
                
                      <div class="registro">    
                        <?php include 'lateral.php';?>
 

                </div>
            </div>
        </aside>
           
        </main>
    </body>
</html>