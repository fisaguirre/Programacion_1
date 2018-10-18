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
    $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND clave = :clave";
    $ejecutarsql = $conectar->prepare($sql);
    $ejecutarsql ->execute($datos);



$cantidad = $ejecutarsql->rowCount();

   if($cantidad>0){
     while($fila2=$ejecutarsql->fetch(PDO::FETCH_ASSOC)){
         if($fila2['habilitado']==1){
           $_SESSION['valido']=1;
           if($fila2['rol']=='usuario'){
             $_SESSION['variable_rol']=1;
             $_SESSION['nombre_usuario']=$fila2['usuario'];
             header('location: Usuario.php');
           }else if($fila2['rol']=='admin'){
             $_SESSION['variable_rol']=2;
             $_SESSION['nombre_usuario']=$fila2['usuario'];
             header('location: Admin.php');
           }else{
             header('location: Login.html');
           }
         }else{
           header('location: Login.html');
         }
       }
     }else{
       header('location: Login.html');
     }

$_SESSION['iniciar_sesion']=1;


         ?>



  </body>
</html>
