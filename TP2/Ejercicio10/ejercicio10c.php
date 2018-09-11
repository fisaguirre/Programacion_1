<html>
<head>
<title></title>
</head>
<body>

<?php
$suma=0;
?>

</form>


<?php
for($i=0;$i<$_GET["cantidad"];$i++){
if($_GET["Check$i"]==on){

echo "Se selecciono el Producto $i";
echo "<br>";
$suma=$suma+1;
}
}
echo "La cantidad de Productos seleccionados es de: $suma";

?>
</form>






</body>
</html>
