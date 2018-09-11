<?php
$arr1=array();
$numeros=15;

for($i=0;$i<$numeros;$i++){
array_push($arr1,rand(1,50));
}

echo "<pre>";
print_r($arr1);
echo "</pre>";

$arr2=array_unique($arr1);

echo "<pre>";
print_r($arr2);
echo "</pre>";
?>
