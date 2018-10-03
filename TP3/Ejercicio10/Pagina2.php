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
    echo "Esta es la Pagina 2";
    echo "<br>";
    echo "Usuario: {$_SESSION["usuario"]}";
    echo "<br>";
     ?>

     <?php
     $datep2 = date("Y-m-d H:i:s");
     $_SESSION["datep2"]=$datep2;
     $archivo=fopen('registro.txt',"a");
     fwrite($archivo,' '.$_SESSION["datep2"].';Pagina2.php'.PHP_EOL);
     fclose($archivo);

     ?>

    <a href="Home.php">HOME</a><br>
    <a href="Pagina1.php">Pagina 1</a><br>
    <a href="Pagina3.php">Pagina 3</a><br>
  </body>
</html>
