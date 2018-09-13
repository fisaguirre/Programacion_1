<html>
<head>
<title></title>
</head>
<body>
<?php
$valor1=$_POST["valor"];
$valor2=$valor1+1
?>
<form action="Ejercicio1c.php" method="POST">
<?php




if($valor1<5){
  for ($i=1;$i<6;$i++){
  echo "<label for=\"dato$i\">Dato numerico $i: </label>";
  echo "<input type=\"text\" id=\"dato$i\" name=\"dato$i\"><br>";
  }
}else if($valor1>=5){
  for ($j=1;$j<$valor1+1;$j++){
  echo "<label for=\"dato$j\">Dato numerico $j: </label>";
  echo "<input type=\"text\" id=\"dato$j\" name=\"dato$j\"><br>";
  }
}

?>
<input type="submit" value="Enviar">
</body>
</html>
