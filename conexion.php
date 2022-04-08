<?php

$host = "localhost";
$user = "root";
$clave = "&&Jonathan&&";
$bd = "tarea_tres";

$conectar = mysqli_connect($host,$user,$clave,$bd);





class Conexion{	  
    public static function Conectar() {        
        define('host', 'localhost');
        define('bd', 'tarea_tres');
        define('user', 'root');
        define('clave', '&&Jonathan&&');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".host."; dbname=".bd, user, clave/*, $opciones*/);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}

?>
