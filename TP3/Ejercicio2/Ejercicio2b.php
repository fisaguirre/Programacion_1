<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<table style="width:30%" border="width: 10px">

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
  list($id,$nombre,$apellido,$email,$observaciones)=explode(";",$linea);

  echo "<tr>";
  echo "<td>";
  echo $id;
  echo "</td>";
  echo "<td>";
  echo $nombre;
  echo "</td>";
  echo "<td>";
  echo $apellido;
  echo "</td>";
  echo "<td>";
  echo $email;
  echo "</td>";
  echo "<td>";
  echo $observaciones;
  echo "</td>";
  echo "</tr>";


}


 ?>

 </table>

</body>
</html>
