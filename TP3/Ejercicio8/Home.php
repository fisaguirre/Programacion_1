<?php session_start() ?>

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
      echo "Esta es la pagina HOME";
      echo "<br>";
      echo "Usuario: {$_SESSION["usuario"]}";
      echo "<br>";
       ?>
      <a href="Pagina1.php">Pagina 1</a><br>
      <a href="Pagina2.php">Pagina 2</a><br>
      <a href="Pagina3.php">Pagina 3</a><br>
  </body>
</html>
