<?php
session_start();
if (!$_SESSION['nivel']==1) {
	header("Location:login.php");
}
	include('../conexion.php');
 $id=$_GET['id'];
 $sql = "SELECT id,habitacion,precio,img From tipohabitacion where id=".$id;
 $resultado=$con->query($sql);
 $d=$resultado->fetch_assoc();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Habitacion</title>
</head>
<body>
	<center>
		<h1>Editar Habitacion</h1>
		<a href="javascript:llamar('habitaciones.php')">Volver</a>
		<hr>
		<form action="editar.php" method="POST">
			<label for="txtHabitacion">Habitacion: </label>
			<input type="text" name="txtHabitacion" value=" <?php echo $d['habitacion']; ?> "><br><br>
			<label for="txtPrecio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio: </label>
			<input type="text" name="txtPrecio" value=" <?php echo $d['precio']; ?> "><br><br>
			<img src="images/<?php echo $d['img']; ?> " alt="<?php echo $d['img']; ?>">
			<input type="hidden" name="id" value="<?php echo $d['id']; ?>"><br>
			<label for="foto"><b>Seleccionar Foto: </b></label>
 			<input  id="foto" type="file" name="foto"><br><br>
			<input type="submit" value="Actualizar">
		</form>
	</center>
	<hr>
</body>
</html>