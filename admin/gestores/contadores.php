<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$conex = new mysqli("localhost",'g22019','LAB2g4rr3gu3zLAB2',"g22019_db");

//Contadores Casas Disponibles
$query= "SELECT * FROM `Casas` WHERE casa_estado='1'";
$result = $conex->query($query);
$cont_disp = $result->num_rows;

//Contadores Casas Ocupadas
$query= "SELECT * FROM `Casas` WHERE casa_estado='0'";
$result = $conex->query($query); //ejecuta query
$cont_ocup = $result->num_rows; // cuenta las filas del resultado

// Cantidad Total de CASAS
$cant_TotalCasas = $cont_ocup + $cont_disp;


// Para hacer porcentajes usamos regla de 3

// Porcentajes de Casas alquiler

$porcentajeCasas_Alquiladas = round((100 * $cont_ocup) / $cant_TotalCasas); //round redondea resultado regla de tres

$porcentajeCasas_no_Alquiladas = 100 - $porcentajeCasas_Alquiladas;

mysqli_close($conex);

?>