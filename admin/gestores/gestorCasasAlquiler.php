<?php
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'g22019_db');
        define('usuario', 'g22019');
        define('password', 'LAB2g4rr3gu3zLAB2');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexi贸n es: ". $e->getMessage());
        }
    }
}

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$date = date('Y-m-d');


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';



ini_set('display_errors', 1);

switch($opcion){
     case 1:
         // Obtenemos las casas que estan disponibles
        $consulta = "SELECT * FROM Casas WHERE casa_estado = 1 ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
     case 2: 
         // Obtenemos las casas que estan Ocupadas
        $consulta = "SELECT * FROM Casas WHERE casa_estado = 0 ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break; 
    case 3: 
         // Obtenemos todas las casas
        $consulta = "SELECT * FROM Casas";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 4:
        // Obtenemos todas las casas
        $consulta = "SELECT * FROM inquilinoAlquiler WHERE idCasa='$idCasa'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
?>