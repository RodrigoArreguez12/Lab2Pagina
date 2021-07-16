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

$conex = new mysqli("localhost",'g22019','LAB2g4rr3gu3zLAB2',"g22019_db");


$date = date('Y-m-d');

$id_solicitud = (isset($_POST['id_solicitud'])) ? $_POST['id_solicitud'] : '';

$idCasa = (isset($_POST['idCasa'])) ? $_POST['idCasa'] : '';
$DNI = (isset($_POST['DNI'])) ? $_POST['DNI'] : '';
$operacion = (isset($_POST['operacion'])) ? $_POST['operacion'] : '';
$Nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$Apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$mail = (isset($_POST['mail'])) ? $_POST['mail'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$meses = (isset($_POST['meses'])) ? $_POST['meses'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';



ini_set('display_errors', 1);

switch($opcion){
    case 1:
        // Devuelve solo confirmadas
        $consulta = "SELECT solicitud_id, solicitud_persona_id, solicitud_casa_id, t.valor_estado, solicitud_fecha_inicio, solicitud_numero, solicitud_cant_meses FROM Solicitudes s JOIN TablaEstados t on s.solicitud_estado = t.id_estado WHERE s.solicitud_estado = 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2:  
        // Devuelve solo rechazadas
        $consulta = "SELECT solicitud_id, solicitud_persona_id, solicitud_casa_id, t.valor_estado, solicitud_fecha_inicio, solicitud_numero, solicitud_cant_meses FROM Solicitudes s JOIN TablaEstados t on s.solicitud_estado = t.id_estado WHERE s.solicitud_estado = 2";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:
	    $consulta = "UPDATE `Solicitudes` SET `solicitud_estado`= 2 WHERE solicitud_id = '$id_solicitud'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        
        $consulta = "SELECT * FROM Solicitudes";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break; 
    case 4:
        
        // Nos fijamos si hay alguna casa con el id que pasamos que este libre (es 1 o 0, alguna si o si)
        $query = "SELECT * FROM `Casas` WHERE casa_id='$idCasa' AND casa_estado=1";
        $result = $conex->query($query);
        
        // Guardamos la cantidad de filas encontradas (1 o 0)
        $validador = $result->num_rows;

        if($validador == 1){
            // Como hay una casa libre, entonces...
            
        // Cambiamos el estado a la solicitud en cuestion, y la confirmamos
        $consulta = "UPDATE `Solicitudes` SET `solicitud_estado`= 1 WHERE solicitud_id = '$id_solicitud'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        
        // Cambiamos el estado de la casa a ocupada ( casa_estado = 0 )
        $consulta = "UPDATE `Casas` SET  `casa_estado`= 0  WHERE casa_id = '$idCasa'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        
        // Debolvemos data = 1 para avisar al front
        $data = 1;
        }else{
            // Como no esta disponible la casa, no hacemos ninguna query y avisamos al front con el data = 0
            $data = 0;
        }
        
        $data = $validador;
        
        break;    
    case 5:
        // Devuelve solo pendientes
        $consulta = "SELECT solicitud_id, solicitud_persona_id, solicitud_casa_id, t.valor_estado, solicitud_fecha_inicio, solicitud_numero, solicitud_cant_meses FROM Solicitudes s JOIN TablaEstados t on s.solicitud_estado = t.id_estado WHERE s.solicitud_estado = 3";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 6:
        $query = "SELECT p.persona_id, s.solicitud_id FROM Persona p JOIN Solicitudes s on s.solicitud_estado = 2 WHERE s.solicitud_persona_id = persona_id";
        $result = $conex->query($query);
        $fila1 = mysqli_fetch_all($result);

       for ($i = 0; $i < count($fila1); $i++) {
                    $id_persona_temp = $fila1[$i][0];
                    $id_solicitud_temp = $fila1[$i][1];
                    
                    $query = "DELETE FROM `Solicitudes` WHERE solicitud_id = '$id_solicitud_temp'";
                    $result = $conex->query($query);
                    
                    $query = "DELETE FROM `Persona` WHERE persona_id = '$id_persona_temp'";
                    $result = $conex->query($query);
                    
                    
        }
        $query = "SELECT p.persona_id, s.solicitud_id FROM Persona p JOIN Solicitudes s on s.solicitud_estado = 2 WHERE s.solicitud_persona_id = persona_id";
        $result = $conex->query($query);
        $validador = $result->num_rows;
        
        $data = "Ultimos datos: '$id_persona_temp' - '$id_solicitud_temp'";
        break;
    case 7:
	    $consulta = "UPDATE `Solicitudes` SET `solicitud_estado`= 2 WHERE solicitud_id = '$id_solicitud'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        
        $consulta = "UPDATE `Casas` SET  `casa_estado`= 1  WHERE casa_id = '$idCasa'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
        }

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

mysqli_close($conex);

?>