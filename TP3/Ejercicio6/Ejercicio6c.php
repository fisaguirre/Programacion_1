<?php session_start() ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php echo "Usuario: {$_SESSION["usuario"]}"; ?>
  </body>
</html>
