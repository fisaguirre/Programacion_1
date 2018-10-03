<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
$archivo=$_FILES['archivo']['tmp_name'];
$archivo2="Importados/".$_FILES['archivo']['name'];
if(!copy($archivo,$archivo2)){
  echo "error";
  echo "<br>";
}else{
  echo "Archivo copiado en la carpeta Importados";
  echo "<br>";
}



$imagenes=scandir("Importados/",1);

echo "<pre>";
print_r($imagenes);
echo "</pre>";

$cantidad=count($imagenes);

 ?>

<table>
  <?php
  for($i=0;$i<$cantidad-2;$i++){
    echo "<tr>";
    echo "<img src=\""."Importados/".$imagenes[$i]."\" height=\"200\" width=\"200\">";
    echo "<tr>";
  }

   ?>
</table>

</body>
</html>
