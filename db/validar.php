<?php
include 'conectar.php';

$user1 = $_REQUEST['usuario'];
$pass1 = $_REQUEST['pass'];

$resultado = $conexion->query("SELECT * FROM Usuarios WHERE usuario_user='$user1' AND usuario_pass='$pass1'"); 

    /* determinar el numero de filas del resultado */
    $filas = $resultado->num_rows;


//echo $filas;
if ($conexion->connect_error) {
                        die("Connection failed: " . $conexion->connect_error);
                    }

if ($resultado->connect_error) {
                        die("Connection failed: " . $resultado->error);
                    }


if($filas>0){
		
		session_start();
       
		$_SESSION['usuario']=$user1;
		header("Location: http://g2.develnet.net/admin/index.php");
}else{
		header("Location: http://g2.develnet.net/admin/login.php?sn=1");
}

mysqli_free_result($resultado);

mysqli_close($conexion);

?>