<?php

$edad=4;//int
$peso=21.4; //float
$raza="labradora";//string
$female=true; //boolean

$edad=3;
echo $edad."<br/>"; //permite cambiar la asignacion a la variable

define("NOMBRE", "MAMBIS"); //Define el valor constante, sin $ y en mayusculas
echo NOMBRE."<br/>";
echo "Hola! soy ".NOMBRE." tengo ".$edad."años, peso ".$peso."kgs. y soy de raza ".$raza;
?>