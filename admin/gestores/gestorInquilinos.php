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

$id_persona = (isset($_POST['id_persona'])) ? $_POST['id_persona'] : '';

$idCasa = (isset($_POST['idCasa'])) ? $_POST['idCasa'] : '';
$DNI = (isset($_POST['DNI'])) ? $_POST['DNI'] : '';
$operacion = (isset($_POST['operacion'])) ? $_POST['operacion'] : '';
$Nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$Apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$mail = (isset($_POST['mail'])) ? $_POST['mail'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$meses = (isset($_POST['meses'])) ? $_POST['meses'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$conex = mysqli_connect("localhost","g22019","LAB2g4rr3gu3zLAB2","g22019_db");
/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

ini_set('display_errors', 1);

switch($opcion){
     case 1:
         // Obtenemos los inquilinos, uniendo las personas con su solicitud en donde el estado de la solicitud es 1 ( confirmado ), al ser confirmado decimos que es inquilino
        $consulta = "SELECT persona_id, persona_dni, persona_nombre, persona_apellido, persona_mail, persona_telefono, s.solicitud_casa_id, persona_mesesAlquiler FROM Persona p
                        JOIN Solicitudes s
                        on s.solicitud_estado = 1
                    WHERE p.persona_id = s.solicitud_persona_id";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
     case 2: 
     
        // Cambiar la disponibilidad de la casa en cuestion
        $consulta = "UPDATE `Casas` SET casa_estado = 1 WHERE casa_id ='$idCasa'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        // Cambiar el estado de la solicitud de esta persona
        
        $consulta = "UPDATE `Solicitudes` SET `solicitud_estado`= 3 WHERE solicitud_persona_id='$id_persona'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        
        break; 
    case 3: 
         // Obtenemos todas las casas
        $consulta = "SELECT * FROM casasAlquiler";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
//mysql_close($conex);
?>