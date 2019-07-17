<!DOCTYPE html>
<?php
	session_start();
	if (@!$_SESSION['nombre']) {
		header("Location:pregunta1/login.html");
	}
	?>

<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
	<script src="ajax.js"></script>
</head>
<body>
<div id="contenedor">
	<div id="arriba">
		<div id="medio">
			<div id="uno"><img src="Img/usfx.jpg" id="img"></div>
			<div id="dos"><h1 class="tit1">UNIVERSIDAD DE SAN FRANCISCO XAVIER</h1>
			<span class="tit2">Facultad De Tecnologia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
			<span id="red">Sucr</span><span id="yellow">e Bol</span><span id="green">ivia</span>
			</div>
		</div><br><br>
		<span>&nbsp;&nbsp;Carrera: Ing De sistemas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre:1-2019&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; usuario: <strong><?php echo $_SESSION['nombre']; ?></strong> </span><br>
		<span>&nbsp;&nbsp;Hoy es: <strong><?php echo date("d-m-Y"); ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo:<b><?php echo $_SESSION['correo'] ?></b></span>
		
	</div>
	<div id="izquierda">
		<center>
		<ul class="menu">
			<li><a href="javascript:llamar('PREGUNTA3/RegistrarUsuario.php')" >Pregunta 3</a></li>
			<li><a href="javascript:llamar('PREGUNTO4/pregunta4.html')" >Pregunta 4</a></li>
			<li><a href="javascript:calendario()" >Pregunta 5</a></li>
			<li><a href="salir.php" >Cerrar</a></li>
		</ul>
		</center>
	</div>
	<div id="contenido">

	</div>
	<div id="resultado"></div>
</div>

</body>
</html>