<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1">




      <?php
      $servidor="localhost";
      $usuario="fernando2";
      $clave="fernando";
      $basededatos="programacion1";

      $conectar=new PDO("mysql: host=$servidor;dbname=$basededatos",$usuario,$clave);
      $sql = "select	nombre as Nombre,	apellido	as	Apellido,	concat(apellido,',	',	nombre)	as	NombreCompleto,documento as DNI,edad as Edad	from	persona";
      $ejecutarsql = $conectar->prepare($sql);
      $ejecutarsql ->execute();

        $i=0;

          echo"<tr>";

          while ($fila = $ejecutarsql->getColumnmeta($i)) {

          echo"<th> ";
          echo $fila['name'];
          echo"</th>";
          $i++;
          }



          while ($fila = $ejecutarsql->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($fila as $nombre => $valor) {
                echo "<td>";
                echo "$valor";
                echo "</td>";
            }
            echo "</tr>";

          }

           ?>




         </table>
  </body>
</html>
