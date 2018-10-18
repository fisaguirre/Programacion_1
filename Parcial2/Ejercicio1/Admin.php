<?php session_start(); ?>


<?php
if($_SESSION['variable_rol']==1){
  header('location: Login.html');
}
if(empty($_SESSION['valido'])) {
  header('location: Login.html');
}
if(empty($_SESSION['iniciar_sesion'])){
  header('location: Login.html');
}
echo "Esta es la pagina Admin y su usuario es: ".$_SESSION['nombre_usuario'];
 ?>
