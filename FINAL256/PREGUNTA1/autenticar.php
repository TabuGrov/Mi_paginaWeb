<?php 
session_start();
include('../conexion.php');
$usuario=$_POST['txtUser'];
$clave=$_POST['txtPassword'];
	$sql="SELECT usuario,password,correo FROM usuarios WHERE usuario='$usuario' AND password='$clave'" ;
	$result=$con->query($sql);
	if($fila=$result->fetch_assoc())
	{
		$_SESSION['nombre']=$fila['usuario'];
		$_SESSION['correo']=$fila['correo'];
		header("location:../index.php");
	}
	else
	{
			echo '<script>alert("Email o contraseña incorrecta")</script>';
			echo "<script>location.href='login.html'</script>";
	}
	

 ?>