<?php
$valor=0;
$arr1=array();
$contador=0;

while($valor!=1){
  array_push($arr1,rand(1,30));
  $cantidad=count($arr1);
  if($cantidad>9){
    for($i=0;$i<$cantidad;$i++){
      if($arr1[$i]==30){
        $valor++;
      }
    }
  }
}

asort($arr1);
echo "Arreglo ordenado: ";
echo "<br>";
echo "<pre>";
print_r($arr1);
echo "</pre>";
echo "<br>";

echo "Arreglo dividido: ";
echo "<br>";

$suma=$cantidad/2;
echo "<pre>";
print_r(array_chunk($arr1, ($cantidad/2),TRUE));
echo "</pre>";

?>
