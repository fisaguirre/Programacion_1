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

    $sql="select * from persona";

    $ejecutarsql=$conectar->prepare($sql);
    $ejecutarsql->execute();
    while($fila=$ejecutarsql->fetch(PDO::FETCH_ASSOC)){
      echo "<tr>";
      foreach($fila as $fil){
        echo "<td>";
        echo $fil;
        echo "</td>";
      }
      echo "</tr>";
    }




     ?>

     </table>

  </body>
</html>
