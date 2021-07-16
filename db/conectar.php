<?php 

$conexion = new mysqli("localhost",'g22019','LAB2g4rr3gu3zLAB2',"g22019_db");

if ($conexion->connect_errno) {
        echo "La conexión a la Base de Datos ha resultado en un fallo";
    }
?>