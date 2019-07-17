<?php 
session_start();
if ($_SESSION['nivel']==1) { 
	include('../conexion.php');
	$sql = "SELECT t.habitacion,r.nombre,r.fecha,r.valor FROM tipohabitacion t INNER JOIN reservas r on t.id=r.id_tipohabitacion";
 	$resultado=$con->query($sql);
	?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Reservas</title>
 </head>
 <body>
 	<center>
 		<h1>Reservas</h1>
 		<hr>
 		<table border="1">
 		<tr>
 			<th>Nombre</th>
 			<th>Habitacion</th>
 			<th>Fecha</th>
 			<th>Valor</th>
 			<th>Confirmar</th>
 			<th>Eliminar</th>
 		</tr>
 		<?php 
 		while ($d=$resultado->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $d['nombre']; ?></td>
				<td><?php echo $d['habitacion']; ?></td>
				<td><?php echo $d['fecha']; ?></td>
				<td><?php echo $d['valor'] ?></td>
				<td><a href="">SI</a></td>
				<td><a href="">Eliminar</a></td>
				<?php } ?>
			</tr>
 		</table>
 	</center>
 </body>
 </html> 
<?php }
	else {
		header("Location:../index.php");
	}
 ?>