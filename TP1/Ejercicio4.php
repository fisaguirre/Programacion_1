<?php


$string="1,2,3,4,5,6";

echo "los valores del string son: ".$string;
echo "<br>";

$arr=str_split($string);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";

echo "Ejercicio 2: ";
echo "<br>";

$arr2=array(1,2,3,4,5,6,7,8);
echo "<pre>";
print_r($arr2);
echo "</pre>";
$string2=implode(",",$arr2);
echo "Transformado es: ".$string2;
?>
