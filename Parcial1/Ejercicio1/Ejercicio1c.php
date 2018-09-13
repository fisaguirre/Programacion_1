<html>
<head>
<title></title>
</head>
<body>
  <table>

<?php
echo "Tabla:   ";
foreach ($_POST as $valor1){
echo "<tr>";
echo "<td>";
echo $valor1;
echo "</td>";
echo "</tr>";
}

?>

</table>
<?php
echo "<br> El valor maximo es: ";
echo max($_POST);
echo "<br> El valor minimo es: ";
echo min($_POST);
$contador=0;
$suma=0;
foreach ($_POST as $valor3){
$suma=$suma+$valor3;
$contador++;
}
$promedio=$suma/$contador;
echo "<br>";
echo "El promedio es:".$promedio;
?>
</body>
<html>
