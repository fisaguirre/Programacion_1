<html>
<head>
<title></title>
</head>
<body>
<table>

<?php

$letra="a";
$sumador=1;
$numeros=1;
for ($i="0";$i<"6";$i++){
echo "<tr> ";
for($j=0;$j<6;$j++){
  if($i=="0" && $j==0){
    echo "<td>";
    echo "</td>";
  }else{
    if($i==0){
    echo "<td>";
    echo "$letra";
    echo "</td>";
    $letra++;
  }else if($j==0){
    echo "<td>";
    echo "$numeros";
    echo "</td>";
    $numeros++;
  }else{
    echo "<td>";
    echo "$letra$sumador";
    echo "</td>";
    $letra++;
    $sumador++;
  }
}
}

echo "</tr>";
$letra="a";
$sumador=1;
}


?>

</table>
</body>
</html>
