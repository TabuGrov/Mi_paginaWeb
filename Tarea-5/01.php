<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="estilos.css">
	<meta charset="UTF-8">
	<title>Num 1</title>
</head>
<body>
	<?php 
	$num=$_POST["num"];
	echo "<p>El numero enviado fue $num por lo que seran $num filas y 1 columna</p>";
	echo "<table>";
	for ($i=1; $i<=$num ; $i++) { 
		echo "<tr>
				<td class='ancho'>$i</td>
			   </tr>";
	}
	echo "</table>";

	 ?>
	 <hr>
	 <a class="button" href="Tarea-5.php">VOLVER</a>
	 <div id="copyright">
			<b>Nombre:</b> <span>Grover Taboada Rodas <br> <span><b>Carreras:</b></span> Ing. de Sistemas---Ing. Ciencias de la computacion</span>
	</div>
</body>
</html>