<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="estilos.css">
	<meta charset="UTF-8">
	<title>Area de un triangulo</title>
</head>
<body>
	<?php 
		$b=$_GET["b"];
		$h=$_GET["h"];
		$a=($b*$h)/2;
		echo "<h3>El area del triangulo Es:<span class='white'>$a m2</span></h3>";
	 ?>
	 <hr>
	 <a class="button" href="Tarea-5.php">VOLVER</a>
	 <div id="copyright">
			<b>Nombre:</b> <span>Grover Taboada Rodas <br> <span><b>Carreras:</b></span> Ing. de Sistemas---Ing. Ciencias de la computacion</span>
	</div>
</body>
</html>