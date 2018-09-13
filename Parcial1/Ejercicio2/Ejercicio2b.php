<?php

$d=$_POST['lista1'];
$m=$_POST['lista2'];
$y=$_POST['lista3'];
$var1=$_POST['oculto1'];
$var2=$_POST['oculto2'];
$var3=$_POST['oculto3'];
$chk=$_POST['check1'];


if($chk==1){

  echo "Hoy es el $d de $m de $y";
}else{
  echo "hoy es el $var1/$var2/$var3";
}

echo "<br>";
echo "<br>";

 ?>






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
         if($chk==1){
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
         }else if($chk!=1){
           for($i=1;$i<=12;$i++){
             $month=date("m",mktime(0,0,0,$i,1));
             $mes=date("m");
             if($mes==$month){
               echo "<option selected=\"selected\" value=\"$mes\">$mes</option>";
             }else{
               echo "<option value=\"$i\">$month</option>";
             }
           }
         }


         ?>

       </select>

 <?php echo "Año: "; ?>

       <select name="lista3">

         <?php
         if($chk==1){
           for($i=1900;$i<2101;$i++){
             $año=date("Y");
             if($i==$año){
                 echo "<option selected=\"selected\" value=\"$i\">$año</option>";
                }else{
               echo "<option value=\"$i\">$i</option>";
             }
           }
         }else if($chk!=1){
           for($i=00;$i<100;$i++){
             $year=date("y",mktime(0,0,0,$i,0,date("y")));
             $año=date("y");
             if($i==$year){
                 echo "<option selected=\"selected\" value=\"$i\">$año</option>";
                }else{
               echo "<option value=\"$i\">$i</option>";
             }
           }
         }

         ?>
       </select>

 </form>
   </body>
 </html>
