<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<table>

<?php
$arr2=array();
$i=0;
$string="1,2,3,4;5,6,7,8;9,10,11,12;13,14,15,16;17,18,19,20;21,22,23,24;25,26,27,28";

foreach(explode(';',$string) as $arr){
  $arr2[]=explode(',',$arr);
}

$fil = count($arr2);
$col = (count($arr2, COUNT_RECURSIVE)-$fil);
$div = $col/$fil;
for ($i=0; $i < $fil; $i++) {
  if ($i%2==0){
      echo "<tr>";
  }else{
      echo "<tr>";
  }
  for ($c=0;$c<$div;$c++){
  echo "<td>";
   echo $arr2[$i][$c];
   echo"</td>";
  }
    echo "</tr>";
}
?>

</table>
</body>
</html>
