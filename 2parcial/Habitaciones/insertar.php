<?php include('../conexion.php');
$habitacion=$_POST["habitacion"];
$precio=$_POST["precio"];
$nombre_temporal=$_FILES['foto']['tmp_name'];
$foto=$_FILES['foto']['name'];
$tamanio=$_FILES['foto']['size'];
if ($tamanio>1000000)
{
	echo "Tamaño del archivo muy grande";
}
else{
	if (copy($nombre_temporal,"../images/".$foto))
	{
		$sql="INSERT INTO tipohabitacion(habitacion,precio,img) values ('$habitacion',$precio,'$foto')";
		$con->query($sql);
	}
	else
	{
		echo "No se pudo copiar archivo";
	}
}

?>
