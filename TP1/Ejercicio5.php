<?php
echo "Ejercicio A: ";
echo "<br>";
echo "<br>";
$arr1=array();
$numeros=rand(5,15);
for($i=0;$i<$numeros;$i++){
  array_push($arr1,rand(1,100));
}

$cantidad=count($arr1);
echo "la cantidad de elementos del array es de : ".$cantidad;
echo "<br>";
echo "<br>";

echo "Ejercicio B: ";
echo "<br>";
echo "<br>";
echo "<pre>";
print_r($arr1);
echo "</pre>";


echo "Ejercicio C: ";
echo "<br>";
echo "<br>";

$maximo=max($arr1);
$minimo=min($arr1);
echo "El numero maximo del array es: ".$maximo;
echo "<br>";
echo "<br>";
echo "El numero minimo del array es: ".$minimo;
echo "<br>";
echo "<br>";


echo "Ejercicio D: ";
echo "<br>";
echo "<br>";
$suma=array_sum($arr1);
$promedio=round(($suma/$cantidad),2);
echo "el promedio es: ".$promedio;
echo "<br>";
echo "<br>";

echo "Ejercicio E: ";
echo "<br>";
echo "<br>";

for($i=0;$i<$cantidad;$i++){
  if($arr1[$i]==20){
    echo "Se encuentra el numero 20";
  }
}
?>
