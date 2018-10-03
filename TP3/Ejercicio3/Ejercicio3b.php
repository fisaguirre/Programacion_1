<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
$archivo=$_FILES['arch']['tmp_name'];
$archivo2="Importados/".$_FILES['arch']['name'];
if(!copy($archivo,$archivo2)){
  echo "error";
  echo "<br>";
}else{
  echo "Archivo copiado en la carpeta Importados";
  echo "<br>";
}
 ?>

</body>
</html>
