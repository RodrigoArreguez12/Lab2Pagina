<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

        $user="g22019";
        $pass="LAB2g4rr3gu3zLAB2";
        $db="g22019_db";
        $conexion= mysqli_connect("localhost",$user,$pass,$db);

$query = "SELECT * FROM `Casas` WHERE casa_estado = 1";

$respuesta = mysqli_query($conexion, $query);

$json_array = array();

while($row = mysqli_fetch_assoc($respuesta))
{
    $json_array[] = $row;
}

echo json_encode($json_array);


mysqli_close($conexion);

?>