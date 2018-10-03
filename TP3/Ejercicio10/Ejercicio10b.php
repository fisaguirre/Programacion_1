<?php session_start(); ?>
<?php

$_SESSION["usuario"]=$_POST["usuario"];
$_SESSION["clave"]=$_POST["clave"];
?>




<?php

header('Location: Home.php');


 ?>
