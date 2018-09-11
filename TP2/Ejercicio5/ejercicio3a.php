<html>
<head>
<title></title>
</head>
<body>

<?php

$var1= $_GET['texto1'];
$var2= $_GET['texto2'];
$var3= $_POST['hidden'];
$var4= $_GET['password'];
$option= $_GET['Lista'];
$var8= $_POST['radio'];



echo "Textbox 1:".$var1;
echo "<br>";
echo "Textbox 2:".$var2;
echo "<br>";
echo "Password:".$var4;
echo "<br>";

if($_GET['checkbox1']==1){
echo "Checkbox 1: seleccionado";
}
else{
echo "Checkbox 1: no seleccionado";
}
echo "<br>";

if($_GET['checkbox2']==2){
echo "Checkbox 2: seleccionado";
}
else{
echo "Checkbox 2: no seleccionado";
}
echo "<br>";


if($_GET['checkbox3']==3){
echo "Checkbox 3: seleccionado";
}
else{
echo "Checkbox 3: no seleccionado";
}
echo "<br>";


echo "Radio grupo1:";
if($_GET['radio1']==1){
echo " elemento 1";}
if($_GET['radio2']==2){
echo " elemento 2";}
if($_GET['radio3']==3){
echo " elemento3";
}
echo "<br>";



echo "Radio grupo2:";

if($_GET['radio4']==4)
{
echo " elemento 1";
}
if($_GET['radio5']==5)
{
echo " elemento 2";
}
if($_GET['radio6']==6)
{
echo " elemento 3";
}
echo "<br>";




echo "Lista desplegable: ".$option;


?>

</body>
</html>
