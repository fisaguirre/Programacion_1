<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $var=$_GET["id"];

    $servidor="localhost";
    $usuario="fernando2";
    $clave="fernando";
    $basededatos="programacion1";

    $conectar=new PDO("mysql: host=$servidor;dbname=$basededatos",$usuario,$clave);

    $sql="select * from persona";

    $ejecutarsql=$conectar->prepare($sql);
    $ejecutarsql->execute();

$registro=array("id" => $var);

$sql="DELETE FROM persona WHERE id = :id";

          $ejecutarsql = $conectar->prepare($sql);
          $ejecutarsql->execute($registro);

    header('Location: Ejercicio4.php');

     ?>
  </body>
</html>
