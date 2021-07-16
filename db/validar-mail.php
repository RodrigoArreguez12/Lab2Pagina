<?php 

ini_set('display_errors', 1); //librerias que muestran los detalles de errores
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

         $user="g22019"; //conexion a la db
        $pass="LAB2g4rr3gu3zLAB2";
        $db="g22019_db";
        $conexion=new mysqli("localhost",$user,$pass,$db);


$mail = (isset($_POST['mail'])) ? $_POST['mail'] : '';

$query = "SELECT * FROM Persona p
	JOIN Solicitudes s
    on s.solicitud_persona_id = p.persona_id
	WHERE p.persona_mail = '$mail' AND s.solicitud_estado = 1";
	
$result = $conexion->query($query); //se ejecuta

$cont = $result->num_rows;

echo $cont;

?>