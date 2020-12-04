<?php 

require_once 'coche.php';

// Se puede instancias varios objetos
$coche = new Coche("Azul", "Marca 1", "Modelo 1", 100);
$coche2 = new Coche("Verde", "Marca 2", "Modelo 2", 200);

$coche->color = "Rojo";
// No se puede acceder a $coche->marca = "Marca 3"; ya que tiene un alcance protected, se tiene que definir un metodo para poder acceder
$coche->setMarca("Marca 3");

// No se puede acceder a $coche->modelo; ya que es una propiedad privada, se tiene que definir un metodo para pder acceder
echo $coche->getModelo();


echo $coche->mostrarInformacion($coche);
// Mostrara error de tipo de dato Objeto
// echo $coche->mostrarInformacion("Hola");

// var_dump($coche);
// var_dump($coche2);

?>