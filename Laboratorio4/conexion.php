<?php 
	$server="localhost";
	$user="root";
	$pass="";
	$bd="bd_correo";
	$con=new mysqli($server,$user,$pass,$bd);
	if ($con->connect_error) die("Conexion Fallada ".$con->connect_error);
	if (!$con->set_charset("utf8")) {
		printf("Error cambiando el juego de caracteres utf8: %s\n", $con->error);
	} else {
		$con->character_set_name();
	}
?>