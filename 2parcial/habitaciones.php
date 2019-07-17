<?php 
session_start();
if (isset($_SESSION['nombre'])) {
include('conexion.php');
$sql = "SELECT id,habitacion,precio,img From tipohabitacion";
$resultado=$con->query($sql);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Habitaciones</h1>
		<?php  
  			if ($_SESSION['nivel']==1) {?>
				<h2>
					<a href="javascript:llamar('Habitaciones/finsertar.php')">Insertar</a>
				</h2>
			<?php } ?>
	</center>
	<hr>
	<center>
		<div id="insertar"></div>
		<table border="1">
			<tr>
				<th>Tipo</th>
				<th>Precio</th>
				<th>Foto</th>
				<?php if ($_SESSION['nivel']==1) { ?>
					<th colspan="2">Operaciones</th>
				<?php } else{?> <td>Reservar</td> <?php } ?>
			</tr>
			<?php while ($d=$resultado->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $d['habitacion']; ?></td>
					<td><?php echo $d['precio']; ?></td>
					<td><img src="images/<?php echo $d['img'];?>" alt="<?php echo $d['img'];?>"></td>
					<?php if ($_SESSION['nivel']==1) { ?>
					<td> <a href="javascript:llamar('Habitaciones/feditar.php?id=<?php echo $d['id'] ;  ?>')">Editar</a> </td>
					<td> <a href="javascript:llamar('Habitaciones/eliminar.php?id=<?php echo $d['id'] ;  ?>')">Eliminar</a> </td>
					<?php } else{ ?> <td> <a href="javascript:reservar(<?php echo $d['id'] ;?>)">Reservar</a> </td> <?php } ?>
				</tr>
			    
		<?php	} ?>
		</table>
</body>
</html>
	

<?php }

 else {
 	 	header("location:login.php");
 	 } 
 ?>