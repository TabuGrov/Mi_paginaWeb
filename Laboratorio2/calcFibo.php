<?php 
include('operaciones.php');
session_start();
$n=$_GET['txtFibonaci'];
$_SESSION['operacion'] = new Operaciones("$n","","","","");
$_SESSION['operacion']->CalcularFibonaci();

?>
<a href="index.html">Volver Menu</a>