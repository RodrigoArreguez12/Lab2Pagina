<?php 

        $user="g22019";
        $pass="LAB2g4rr3gu3zLAB2";
        $db="g22019_db";
        $conexion=new mysqli("localhost",$user,$pass,$db);

$id = $_POST['id'];


$query = "SELECT * FROM `imagenesAlquiler` WHERE img_casa_id=$id";

$respuesta = mysqli_query($conexion, $query);

$json_array = array();

while($row = mysqli_fetch_assoc($respuesta))
{
    $json_array[] = $row;
}


echo json_encode($json_array);
    
mysqli_close($conexion);


?>