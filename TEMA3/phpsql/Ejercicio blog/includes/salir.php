<?php
session_start();
echo 'ayuda';
$_SESSION['usuario'] = null;
session_destroy();
header("Location: index.php");
?>