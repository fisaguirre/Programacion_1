<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "Esta es la Pagina 1";
    echo "<br>";
    echo "Usuario: {$_SESSION["usuario"]}";
    echo "<br>";
     ?>
    <a href="Home.php">HOME</a><br>
    <a href="Pagina2.php">Pagina 2</a><br>
    <a href="Pagina3.php">Pagina 3</a><br>
  </body>
</html>
