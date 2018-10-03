<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(empty($_SESSION["usuario"])){
      header('Location: Volver.php');
      exit;
    }
    echo "Esta es la Pagina 3";
    echo "<br>";
    echo "Usuario: {$_SESSION["usuario"]}";
    echo "<br>";
     ?>

     <?php
     $datep3 = date("Y-m-d H:i:s");
     $_SESSION["datep3"]=$datep3;
     $archivo=fopen('registro.txt',"a");
     fwrite($archivo,' '.$_SESSION["datep3"].';Pagina3.php'.PHP_EOL);
     fclose($archivo);

     ?>


    <a href="Home.php">HOME</a><br>
    <a href="Pagina1.php">Pagina 1</a><br>
    <a href="Pagina2.php">Pagina 2</a><br>
    <a href="Link.php">Descargar archivo con registros</a><br>
  </body>
</html>
