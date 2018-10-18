<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    if(empty($_SESSION["reg"])){
      header('location: Login.html');
    }else{
      echo "Usuario registrado y logueado->> ".$_SESSION["usr"];
    }







     ?>

  </body>
</html>
