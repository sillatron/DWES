<nav>
    <ul>
        <li><a href="inicio.php">Inicio</a></li>
        <?php
        include 'conexion.php';
        $sql = "select nombre from categorias";
        $consulta = mysqli_query($conexion, $sql);
        while($fila= mysqli_fetch_assoc($consulta)){ ?>
        <li><a href="#"><?= $fila['nombre']?></a></li>
        <?php }
        ?>
        
        
    </ul>
</nav>

