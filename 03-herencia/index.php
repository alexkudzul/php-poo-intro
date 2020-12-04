<?php

require_once 'clases.php';

$persona = new Persona();
$persona->setNombre("Alex 1");
var_dump($persona);

$ingeniero = new IngenieroSistemas();
$ingeniero->setNombre("Alex 2");
$ingeniero->setLenguajes("JavaScript, PHP");
var_dump($ingeniero);

$tecnico = new TecnicoRedes();
$tecnico->setNombre("Alex 3");
echo $tecnico->auditaria();
var_dump($tecnico);

?>