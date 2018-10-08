<?php

$var1=$_POST["nombre"];
$var2=$_POST["apellido"];
$var3=$_POST["documento"];
$var4=$_POST["edad"];


$servidor="localhost";
$usuario="fernando2";
$clave="fernando";
$basededatos="programacion1";

$conectar=new PDO("mysql: host=$servidor;dbname=$basededatos",$usuario,$clave);

$sql="select * from persona";

$ejecutarsql=$conectar->prepare($sql);
$ejecutarsql->execute();

$registro=array("nombre" => $var1, "apellido" => $var2, "documento" => $var3, "edad" => $var4);


  $sql= "INSERT INTO persona (nombre, apellido, documento, edad) VALUES (:nombre,:apellido,:documento,:edad)";
  $ejecutarsql=$conectar->prepare($sql);
  $ejecutarsql->execute($registro);

  header('Location: Ejercicio3.php');
  exit();

?>
