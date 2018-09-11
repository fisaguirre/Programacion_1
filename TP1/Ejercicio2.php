<?php

$arr=array(1,2,3,4);
echo "Ejercicio 1: ";
echo "<br>";
echo "<pre>";
print_r($arr);
echo "</pre>";



$arr2=array("a0"=>1,"a1"=>2,"a2"=>3,"a3"=>4);
echo "Ejercicio2: ";
echo "<br>";
echo "<pre>";
print_r($arr2);
echo "</pre>";

$arr3=array(
        array(
          array("gato","perro"),
          array("gato2","perro2")
      ),
        array(
          array("pajaro","tucan"),
          array("pajaro2","tucan")
      ),
        array(
          array("leon","tigre"),
          array("leon2","tigre2")
      )
);
echo "Ejercicio3: ";
echo "<br>";
echo "<pre>";
print_r($arr3);
echo "</pre>";



$arr4=array(
  "primero"=>array("lapiz"=>"papel",
                   "lapicera"=>"hoja"),
  "segundo"=>array("botella"=>"agua",
                   "cuchara"=>"tenedor"),
  "tercero"=>array("mesa"=>"silla",
                   "madera"=>"mueble")
);


echo "Ejercicio4: ";
echo "<br>";
echo "<pre>";
print_r($arr4);
echo "</pre>";


?>
