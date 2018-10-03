<?php

session_start();


?>

<?php

$_SESSION["text4"]=$_POST["text4"];
$_SESSION["text5"]=$_POST["text5"];
$_SESSION["text6"]=$_POST["text6"];


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form action="Ejercicio5d.php" method="post">

       Dato 7:
       <input type="text" name="text7"><br>
       Dato 8:
       <input type="text" name="text8"><br>
       Dato 9:
       <input type="text" name="text9"><br>
       <input type="submit" value="Enviar Datos">

     </form>

   </body>
 </html>
