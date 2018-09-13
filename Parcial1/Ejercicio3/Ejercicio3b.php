<?php

$nombre=$_POST['usuario'];
$clave=$_POST['pass'];

$arr=array(
  'Usuario 1'=>array('Nombre'=>"Juan",
                    'Contraseña'=>"pato",
                    'email'=>"juancito@hotmail.com"),
  'Usuario 2'=>array('Nombre'=>"Pepe",
                    'Contraseña'=>"gato",
                    'email'=>"pepito@hotmail.com"),
  'Usuario 3'=>array('Nombre'=>"Gaston",
                      'Contraseña'=>"pajaro",
                      'email'=>"gastoncito@hotmail.com"),
  'Usuario 4'=>array('Nombre'=>"Martin",
                      'Contraseña'=>"leon",
                      'email'=>"martincito@hotmail.com"),
  'Usuario 5'=>array('Nombre'=>"Pedro",
                    'Contraseña'=>"perro",
                    'email'=>"pedrito@hotmail.com")
);


$existe=0;

foreach($arr as $primero=>$valor){
  if($valor['Nombre']==$nombre){
    if($valor['Contraseña']==$clave){
      $var1=$valor['Nombre'];
      $var2=$valor['Contraseña'];
      $var3=$valor['email'];
      $existe=1;
    }
  }
}
if($existe=1){
  echo "El usuario existe y sus datos son: ";
  echo "<br>";
  echo "Nombre: ".$var1;
  echo "<br>";
  echo "Contraseña: ".$var2;
  echo "<br>";
  echo "Email: ".$var3;
  echo "<br>";
}else{
  echo "El usuario no existe";
}

 ?>
