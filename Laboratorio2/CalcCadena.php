<?php 
include('operaciones.php');
session_start();
$cadena=$_GET['txtCadena'];
$_SESSION['operacion'] = new Operaciones("","$cadena","","","");
$_SESSION['operacion']->Piramide();

?>
<a href="index.html">Volver Menu</a>