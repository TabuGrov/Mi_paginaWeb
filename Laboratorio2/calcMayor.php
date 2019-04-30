<?php 
include('operaciones.php');
session_start();
$a=$_GET['txtA'];
$b=$_GET['txtB'];
$c=$_GET['txtC'];
$_SESSION['operacion'] = new Operaciones("","","$a","$b","$c");
$_SESSION['operacion']->CalcularMayor();
?>
