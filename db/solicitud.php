<?php

ini_set('display_errors', 1); //librerias que muestran los detalles de errores
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$date = date('Y-m-d');

$Nombre    = $_REQUEST['Nombre']; //con los datos ya etiquetados con el request consulto las etiquetas y su info
$Apellido  = $_REQUEST['Apellido'];
$DNI       = $_REQUEST['DNI'];
$Mail      = $_REQUEST['Mail'];
$Telefono  = $_REQUEST['Telefono'];
$id_casa   = $_REQUEST['id-casa'];
$meses     = $_REQUEST['meses'];

$ID_persona     = rand(1000,9999);
$solicitud_nro     = rand(1000,9999);


        $user="g22019"; //conexion a la db
        $pass="LAB2g4rr3gu3zLAB2";
        $db="g22019_db";
        $conexion=new mysqli("localhost",$user,$pass,$db);

// Agregamos la persona y sus datos
$query = "INSERT INTO `Persona`(`persona_id`, `persona_dni`, `persona_nombre`, `persona_apellido`, `persona_mail`, `persona_telefono`, `persona_mesesAlquiler`) VALUES ('$ID_persona', '$DNI', '$Nombre', '$Apellido', '$Mail', '$Telefono', '$meses')";

$conexion->query($query); //se ejecuta


//query consulta de tipo insert para generar un registro en la tabla solicitudes con los valores de las variables ya declaradas
$query = "INSERT INTO `Solicitudes`(`solicitud_persona_id`, `solicitud_casa_id`, `solicitud_estado`, `solicitud_fecha_inicio`, `solicitud_numero`, `solicitud_cant_meses`) VALUES ('$ID_persona','$id_casa','3','$date','$solicitud_nro', '$meses')";

$conexion->query($query); //se ejecuta

mysqli_close($conexion); //cerras la conexion

header("Location: http://g2.develnet.net/?sn=1"); //redirige a otra pagina


?>