<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Laboratorio AJAX</title>
	<link rel="stylesheet" href="CSS/styles.css">
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<script src="ajax.js"></script>
</head>
<body>
	<br>
	
		<div class="text-center h5"><b>Universidad Mayor Real y Pontificia de San  Francisco Xavier de Chuquisaca <br>
				Facultad de Tecnología <br>
				Carrera de ingeniería de Sistemas <br>
				Materia SIS 256</b>
		</div>
		<p class="text-center h6"><b>Alumno:</b> Grover Taboada Rodas</p>
	
	<div id="contenedor">
			<ul class="menu">
				<li><a href="javascript:llamar('recibidos.php')"  id="bandeja">Bandeja de entrada</a></li>
				<li><a href="javascript:llamar('redactar.html')"  id="redactar">Redactar</a></li>
				<li><a href="javascript:llamar('enviados.php')"  id="enviados">Enviados</a></li>
			</ul>
	</div>
	<!-- Resultado -->
	<div id="contenido">
		<h2>Recibidos</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th><input type="checkbox" class="form-control" disabled></th>
			<th >De:</th>
			<th >Asunto</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		include ('conexion.php');
		$sql="SELECT id,asunto,mensaje FROM correos";
		$result=$con->query($sql);

 			while ($fila=$result->fetch_assoc()) 
 			{
 				?>
				<tr >
					<td><input id="<?php echo $fila['id'];?>" type="checkbox" class="form-control" onclick="MostrarBorrar(this.id)"></td>
					<td><a href="javascript:llamar('mostrarMensaje.php?id=<?php echo $fila['id']; ?>')">Grover</a></td>
					<td><a href="javascript:llamar('mostrarMensaje.php?id=<?php echo $fila['id']; ?>')"><?php echo $fila['asunto']; ?></a></td>
					<td><input id="actualizar<?php echo $fila['id']; ?>" onclick="borrar('<?php echo $fila['id']; ?> ');" type="button" class="btn btn-danger" style="display:none;" value="Borrar"  ></td>
 				</tr>
 		<?php }
 		$con->close();
 		 ?>	
	</tbody>
</table> 
	</div>
</body>
</html>