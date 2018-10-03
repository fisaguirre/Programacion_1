<?php
session_start();
?>

<?php

$_SESSION["text7"]=$_POST["text7"];
$_SESSION["text8"]=$_POST["text8"];
$_SESSION["text9"]=$_POST["text9"];

$var1=$_SESSION["text1"];
$var2=$_SESSION["text2"];
$var3=$_SESSION["text3"];
$var4=$_SESSION["text4"];
$var5=$_SESSION["text5"];
$var6=$_SESSION["text6"];
$var7=$_SESSION["text7"];
$var8=$_SESSION["text8"];
$var9=$_SESSION["text9"];

echo "<br>";
echo "Dato 1: ".$var1;
echo "<br>";
echo "Dato 2: ".$var2;
echo "<br>";
echo "Dato 3: ".$var3;
echo "<br>";
echo "Dato 4: ".$var4;
echo "<br>";
echo "Dato 5: ".$var5;
echo "<br>";
echo "Dato 6: ".$var6;
echo "<br>";
echo "Dato 7: ".$var7;
echo "<br>";
echo "Dato 8: ".$var8;
echo "<br>";
echo "Dato 9: ".$var9;
echo "<br>";

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<a href="Ejercicio5e.php">Link</a>
  </body>
</html>
