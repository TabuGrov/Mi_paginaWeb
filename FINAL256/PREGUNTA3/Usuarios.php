<?php include('../conexion.php'); ?>
<h2>Enviados</h2>
<table border="1">
		<tr>
			<th>Usuario</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Correo</th>
		</tr>
		<?php 
		
		$sql="SELECT usuario,nombres,apellidos,correo FROM usuarios";
		$result=$con->query($sql);
 			while ($fila=$result->fetch_assoc()) 
 			{
 				?>
				<tr >
					<td><?php echo $fila['usuario']; ?></td>
					<td><?php echo $fila['nombres']; ?></td>
					<td><?php echo $fila['apellidos']; ?></td>
					<td><?php echo $fila['correo']; ?></td>
 				</tr>
 		<?php }
 		$con->close();
 		 ?>	
</table> 