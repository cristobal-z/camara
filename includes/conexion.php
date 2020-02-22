<?php
	$server='localhost';
    $user='cristobal';
    $password='welcome';
    $bd= 'creaciones';

//$mysqli = new mysqli('localhost', 'root', 'admin', 'empresa');

$conexion = new mysqli($server, $user, $password, $bd);

if($conexion->connect_error){
		die('Error en la conexion' . $conexion->connect_error);
	}
  // echo 'Se conecto a la base de datos '. $bd. "<br>";
?>
