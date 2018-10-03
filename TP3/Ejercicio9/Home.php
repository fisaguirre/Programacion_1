<?php session_start() ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php
      $datehome = date("Y-m-d H:i:s");
      $_SESSION["datehome"]=$datehome;

      if(empty($_SESSION["usuario"])){
        $archivo=fopen('registro.txt',"w+");
        fwrite($archivo,' '.$_SESSION["datehome"].';home.php'.PHP_EOL);
        fclose($archivo);
        header('Location: Volver.php');
        exit;
      }
      echo "Esta es la pagina HOME";
      echo "<br>";
      echo "Usuario: {$_SESSION["usuario"]}";
      echo "<br>";

       ?>

       <?php

       $archivo=fopen('registro.txt',"w+");
       fwrite($archivo,' '.$_SESSION["datehome"].';home.php'.PHP_EOL);
       fclose($archivo);

       ?>


      <a href="Pagina1.php">Pagina 1</a><br>
      <a href="Pagina2.php">Pagina 2</a><br>
      <a href="Pagina3.php">Pagina 3</a><br>
  </body>
</html>
