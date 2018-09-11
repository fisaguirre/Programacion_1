<html>
<title></title>
</head>
<body>

<?php
$var=$_GET["texto1"];
?>

</form>
<form action="ejercicio10c.php" method="GET">
<?php
for($i=0;$i<$var;$i++){
echo "Producto $i <input type=\"text\" name=\"s\" >";
echo "<input type=\"checkbox\" name=\"Check$i\" ><br>";
}

?>
<input type="hidden" name="cantidad" value="<?php echo $var;?>"id="cantidad"/>
<input type="submit" value="Enviar"><br>
</form


</body>
</html>

