<?php session_start(); ?>
<?php

$_SESSION["usuario"]=$_POST["usuario"];
$_SESSION["clave"]=$_POST["clave"];

header('Location: Ejercicio6c.php');


 ?>
