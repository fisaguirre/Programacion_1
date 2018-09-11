<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
.numero1 {
      color: green;
}

.numero2 {
      color: blue;

}
table {
      border-collapse: collapse;
}

table, th, td {
      border: 2px solid red;
}
</style>
</head>
<body>
<table id="table">

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
      echo "<tr class=numero1>";
  }else{
      echo "<tr class=numero2>";
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
