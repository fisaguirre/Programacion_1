<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Ejercicio2b.php" method="post">
      <?php echo "Día: "; ?>
      <select name="lista1">

        <?php

        for($i=1;$i<32;$i++){
          $dia=date("j");
          $dia2=date("d");
          if($dia==$i){
            echo "<option selected=\"selected\" value=\"$i\">$i</option>";
          }else{
            echo "<option value=\"$i\">$i</option>";
          }
        }


        ?>

      </select>
      <?php echo "Mes: "; ?>
      <select name="lista2">
        <?php

        for($i=1;$i<=12;$i++){
          $month=date("F",mktime(0,0,0,$i,1));
          $mes=date("F");
          $mes2=date("m");
          if($mes==$month){
            echo "<option selected=\"selected\" value=\"$mes\">$mes</option>";
          }else{
            echo "<option value=\"$i\">$month</option>";
          }
        }

        ?>

      </select>

<?php echo "Año: "; ?>

      <select name="lista3">

        <?php
        for($i=1900;$i<2101;$i++){
          $año=date("Y");
          $año2=date("y");
          if($i==$año){
            echo "<option selected=\"selected\" value=\"$i\">$año</option>";
          }else{
            echo "<option value=\"$i\">$i</option>";
          }
        }
        ?>
      </select>
      <?php
      echo "<input type=\"hidden\" name=\"oculto1\" value=\"$dia2\">";
      echo "<input type=\"hidden\" name=\"oculto2\" value=\"$mes2\">";
      echo "<input type=\"hidden\" name=\"oculto3\" value=\"$año2\">";
       ?>
      Click para utilizar fecha en formato largo, caso contrario se usa formato corto
      <input type="checkbox" name="check1" value="1">
      <br><br><input type="submit" name="datos" value="Enviar Datos">
    </form>
  </body>
</html>
