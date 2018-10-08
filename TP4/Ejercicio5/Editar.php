<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form action="Guardar.php" method="post">

    <?php

    $var=$_GET["id"];

    $servidor="localhost";
    $usuario="fernando2";
    $clave="fernando";
    $basededatos="programacion1";

    $conectar=new PDO("mysql: host=$servidor;dbname=$basededatos",$usuario,$clave);

    $sql="select * from persona";

    $ejecutarsql=$conectar->prepare($sql);
    $ejecutarsql->execute();

$registro=array("id" => $var);

while($fila=$ejecutarsql->fetch(PDO::FETCH_ASSOC)){
  foreach($fila as $fil){
    if($fila['id']==$var){
      echo "ID: ";
      echo "<input type=\"text\" name=\"id\" value=\"$fila[id]\">";
      echo "<br>";
      echo "Nombre:";
      echo "<input type=\"text\" name=\"nombre\" value=\"$fila[nombre]\">";
      echo "<br>";
      echo "Apellido: ";
      echo "<input type=\"text\" name=\"apellido\" value=\"$fila[apellido]\">";
      echo "<br>";
      echo "Documento: ";
      echo "<input type=\"text\" name=\"documento\" value=\"$fila[documento]\">";
      echo "<br>";
      echo "Edad: ";
      echo "<input type=\"text\" name=\"edad\" value=\"$fila[edad]\">";
      echo "<br>";
      break;
    }
  }
}







     ?>
<input type="submit" name="datos" value="Enviar Datos">
   </form>
  </body>
</html>
