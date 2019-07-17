<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar usuario</title>
</head>
<body>
	<center>
		<h3>Registrar Usuario</h3>
		<form action="javascript:enviar()">
			<label for="txtUser">Usuario</label>
			<input type="text" id="txtUser"><br><br>
			<label for="txtNombre">Nombre</label>
			<input type="text" id="txtNombre"><br><br>
			<label for="txtApellido">Apellidos</label>
			<input type="text" id="txtApellido"><br><br>
			<label for="txtCorreo">Correo</label>
			<input type="text" id="txtCorreo"><br><br>
			<label for="txtPassword">Contraseña</label>
			<input type="text" id="txtPassword"><br><br>
			<label for="txtRepass">Repetir Contraseña</label>
			<input type="text" id="txtRepass"><br>
			<input type="submit" value="Enviar">
		</form>
	</center>
</body>
</html>