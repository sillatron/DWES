<?php

class DataBase {
    private static $pdo_database = "mysql:host=localhost;dbname=pizzas;charset=utf8";
    private static $userName = 'userdwes';
    private static $userPass = 'pestillo';
    
    public function conectaBD(){
        try{
            $conexion = new PDO(self::$pdo_database, self::$userName, self::$userPass);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo ("Error de conexion -> ".$e->getMessage());
        }
        return $conexion;
    }
}

?>