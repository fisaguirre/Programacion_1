<?php

echo "<pre>";
echo "Datos del archivo: ";
echo "<br>";
print_r($_FILES);
echo "</pre>";

echo "<br>";
echo "Contenido del archivo: ";
echo "<br>";

$archivo=fopen($_FILES['archivo']['tmp_name'],"r");
while($linea=fgets($archivo)){
  echo $linea;
}




 ?>
