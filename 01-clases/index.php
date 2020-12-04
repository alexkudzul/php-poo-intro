<?php

/**
 * Programacion Orientada a Objetos en PHP - POO
 */

//  Definir una clase(Molde para crear mas objetos de tipo de coches con caractaristicas parecidas)
class Coche
{

    // Atributos o propiedades (antes variables)
    public $color = "Azul";
    public $marca = "Marca 1";
    public $modelo = "Modelo 1";
    public $velocidad = 100;

    // Metodos, son acciones que hace un objeto (antes funciones)
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }

}

// Crear un objeto o instanciar la clase
$coche = new Coche();

// Usar los metodos

$coche->setColor("Verde");
echo "El color del coche es: " . $coche->getColor() . "<br>";

$coche->acelerar(); //+1 = 101
$coche->acelerar(); //+1 = 102
$coche->acelerar(); //+1 = 103
$coche->acelerar(); //+1 = 104
$coche->frenar(); //-1 = 103

echo "La velocidad actual es: " . $coche->getVelocidad(); // 103
var_dump($coche);

// Se puede crear varios objetos y no afecta al otro ya que son solo moldes
$coche2 = new Coche();
var_dump($coche2);
