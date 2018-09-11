<html>
<head>
<title></title>
</head>
<body>
<?php
$valor1=$_POST["valor"];
$valor2=$valor1+1
?>
<form action="ejercicio7b.php" method="POST">
<?php
for ($i=1;$i<$valor2;$i++){
echo "<label for=\"dato$i\">Dato numerico $i: </label>";
echo "<input type=\"text\" id=\"dato$i\" name=\"dato$i\"><br>"; 
}
?>
<input type="submit" value="Enviar">
</body>
</html>
