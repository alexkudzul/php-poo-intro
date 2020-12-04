<?php
require_once 'configuracion.php';


Configuracion::setColor("Azul");
Configuracion::setNewsLetter(true);
Configuracion::setEntorno("localhost");

echo Configuracion::$color. "<br>";
echo Configuracion::$newsletter. "<br>";
echo Configuracion::$entorno. "<br>";

$configuracion =  new Configuracion();
$configuracion::$color = "Rojo";
echo $configuracion::$color;


?>