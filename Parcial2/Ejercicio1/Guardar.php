<?php

$usr=$_POST["usuario"];
$pass=$_POST["clave"];

$servidor="localhost";
$usuario="fernando2";
$clave="fernando";
$basededatos="programacion1";

$conectar=new PDO("mysql: host=$servidor;dbname=$basededatos",$usuario,$clave);

$sql="select * from usuario";

$ejecutarsql=$conectar->prepare($sql);
$ejecutarsql->execute();

$registro=array("usuario" => $usr, "clave" => $pass, "habilitado" => "1", "rol" => "usuario");

$sql= "INSERT INTO usuario (usuario, clave, habilitado, rol) VALUES (:usuario,:clave,:habilitado,:rol)";

$ejecutarsql=$conectar->prepare($sql);
$ejecutarsql->execute($registro);


header('Location: Login.html');


 ?>
