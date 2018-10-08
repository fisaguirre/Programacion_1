<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $var1=$_POST["id"];
    $var2=$_POST["nombre"];
    $var3=$_POST["apellido"];
    $var4=$_POST["documento"];
    $var5=$_POST["edad"];

    $servidor="localhost";
    $usuario="fernando2";
    $clave="fernando";
    $basededatos="programacion1";

    $conectar=new PDO("mysql: host=$servidor;dbname=$basededatos",$usuario,$clave);

    $sql="select * from persona";

    $ejecutarsql=$conectar->prepare($sql);
    $ejecutarsql->execute();

    $registro=array("id" => $var1, "nombre" => $var2, "apellido" => $var3, "documento" => $var4, "edad" => $var5);
    $sql = "UPDATE persona SET nombre= :nombre, apellido= :apellido, documento= :documento, edad= :edad WHERE id= :id";

    $ejecutarsql=$conectar->prepare($sql);
    $ejecutarsql->execute($registro);


    header('Location: Ejercicio5.php');

     ?>



  </body>
</html>
