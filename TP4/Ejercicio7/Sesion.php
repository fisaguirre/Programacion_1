<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <?php
    $servidor="localhost";
    $usuario="fernando2";
    $clave="fernando";
    $basededatos="programacion1";

    $usr=$_POST["usr"];
    $pass=$_POST["pass"];


    $conectar=new PDO("mysql: host=$servidor;dbname=$basededatos",$usuario,$clave);
    $datos=array("usuario" => $usr, "clave" => $pass);
    //$datos=array("usuario" => $usr);
    //$sql = "SELECT * FROM usuario WHERE usuario =: usuario AND clave =: clave";
    $sql = "SELECT usuario, clave FROM usuario WHERE usuario = :usuario AND clave = :clave";
    //$sql= "select * from usuario";
    $ejecutarsql = $conectar->prepare($sql);
    $ejecutarsql ->execute($datos);


    while($fila=$ejecutarsql->fetch(PDO::FETCH_ASSOC)){
      $c++;
   }

   if($c>0){
     $_SESSION["usr"]=$usr;
     $_SESSION["reg"]=1;
     header('location: Home.php');
   }else{
     header('location: Inicio.html');
   }



         ?>



  </body>
</html>
