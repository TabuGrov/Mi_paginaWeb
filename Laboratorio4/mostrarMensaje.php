<?php 
$id=$_GET['id'];
include ('conexion.php');
$sql="SELECT id,asunto,mensaje FROM correos Where id=$id";
$result=$con->query($sql);
$fila=$result->fetch_assoc();
echo '<b>De:</b> : Grover Taboada Rodas<br>';
echo '<b>Asunto: </b>';
echo $fila['asunto'];
echo '<hr>';
echo '<b>Mensaje: </b> ';
echo $fila['mensaje'];
$sql2="UPDATE correos SET tipo='R' WHERE id=$id";
$con->query($sql2);
?>