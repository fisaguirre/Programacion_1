
<?php


if($_GET['texto']=='fernando'){
echo "Segundo Link:";
echo "<br>";
echo "Texto: ".$_GET['texto'];
}

else if($_GET['texto1']=='dato1'){

echo "Tercer Link:";
echo "<br>";
echo "Primer dato: ".$_GET['texto1'];
echo "<br>";
echo "Segundo dato: ".$_GET['texto2'];
echo "<br>";
echo "Tercer dato: ".$_GET['texto3'];
echo "<br>";

}
else{
echo "No se han enviado datos";}



?>
