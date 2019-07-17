<?php 
include('../conexion.php');
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$pass=$_POST['pass'];
$rpass=$_POST['repass'];
if($pass==$rpass){	
	$insertar ="INSERT INTO usuarios(usuario,nombres,apellidos,correo,password,estado) Values ('$usuario','$nombre','$apellidos','$correo','$pass','V') ";
	$con->query($insertar);
}
?>


 