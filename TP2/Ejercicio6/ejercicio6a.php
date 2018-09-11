<html>
<head>
<title></title>
</head>
<body>

<table>
<?php

$var1= $_POST['texto1'];
$var2= $_POST['texto2'];
$var3=0;
for($i=0;$i<$var1;$i++){
echo "<tr>";
for($j=0;$j<$var2;$j++){
echo "<td> $var3 </td>";
$var3++;
}
echo "</tr>";
}


?>
</table>



</body>
</html>
