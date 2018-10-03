<?php

session_start();


?>

<?php

$_SESSION["text1"]=$_POST["text1"];
$_SESSION["text2"]=$_POST["text2"];
$_SESSION["text3"]=$_POST["text3"];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form action="Ejercicio5c.php" method="post">

       Dato 4:
       <input type="text" name="text4"><br>
       Dato 5:
       <input type="text" name="text5"><br>
       Dato 6:
       <input type="text" name="text6"><br>
       <input type="submit" value="Enviar Datos">

     </form>

   </body>
 </html>
