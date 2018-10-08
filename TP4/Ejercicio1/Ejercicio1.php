<?php

$servidor="localhost";
$usuario="fernando2";
$clave="fernando";
$basededatos="programacion1";

$conectar=new PDO("mysql: host=$servidor;dbname=$basededatos",$usuario,$clave);

$sql="select * from persona";

$ejecutarsql=$conectar->prepare($sql);
$ejecutarsql->execute();


while($fila=$ejecutarsql->fetch(PDO::FETCH_ASSOC)){
  echo $fila;
}

$registros=array(array("nombre" => "pepe", "apellido" => "honguito", "documento" => "39000000", "edad" => "22"),
                 array("nombre" => "luis", "apellido" => "gonzales", "documento" => "30000000", "edad" => "31"),
                 array("nombre" => "jorge", "apellido" => "herrera", "documento" => "10000000", "edad" => "51"));

foreach($registros as $reg){
  $sql= "INSERT INTO persona (nombre, apellido, documento, edad) VALUES (:nombre,:apellido,:documento,:edad)";
  $ejecutarsql=$conectar->prepare($sql);
  $ejecutarsql->execute($reg);
}

die();



 ?>
