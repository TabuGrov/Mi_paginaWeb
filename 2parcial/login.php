<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Hotel</title>
	<script src="ajax.js"></script>
</head>
<body>
	<p>correo admin:admin@gmail.com <br> contraseña: 123456</p>
	<p>correo cliente:grover@user.com <br> contraseña: 12345</p>
	<center>
		<h1>Tarea 8 || Hotel</h1>
		<div class="contenedor">
			<form action="autenticarse.php" method="POST">
				<label for="txtUser">Ingresar correo</label><br>
				<input type="text" name="txtUser"><br>
				<label for="txtPassword">Ingresar contraseña</label><br>
				<input type="password" name="txtPassword"><br><br>
				<input type="submit" value="Ingresar"><br><br>
				<a href="javascript:llamar('registrarse.php')">Registrarse</a><br>
			</form>

			
		</div>
	</center>
	<div id="derecha"></div>
	<hr>
</body>
</html>