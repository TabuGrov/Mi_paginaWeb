<?php
session_start();
if ($_SESSION['nivel']==1) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insertar Habitacion</title>
</head>
<body>

	<center>
		<h1>Insertar Habitacion</h1>
		<hr>
		<form action="javascript:insertar()" method="POST">
			<label for="txtHabitacion">Habitacion: </label>
			<input  id="habitacion" type="text" name="txtHabitacion"><br><br>
			<label for="txtPrecio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio: </label>
			<input  id="precio" type="text" name="txtPrecio"><br><br>
			<label for="foto"><b>Seleccionar Foto: </b></label>
 			<input  id="foto" type="file" name="foto"><br><br>
			<input  type="submit" value="Añadir">
		</form>
	</center>
	<hr>
</body>
</html>
<?php }
else {
	header("Location:habitaciones.php");
}
 ?>