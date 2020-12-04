<?php

// Una clase abstracta es una clase que no se puede instanciar, pero se puede heredar
// y esa clase puede definir una estructura de la clase que la herede
abstract class Ordenador
{
    // Las propiedades siempre van como public solo la clase y los metodos se define como abstracta
    public $encendido;

    // Cuando se define una clase abstracta no se puede definir la funcionalidad que va a tener dentro, solo se define
    abstract public function encender();

    public function apagar()
    {
        $this->encendido = false;
    }
}

// Se tiene que definir la funcion encender en esta nueva clase, si no marcara error ya que hereda de su padre abstracta
class PcLenovo extends Ordenador
{
    public $software;

    public function arrancarSoftware()
    {
        $this->software = true;
    }

    public function encender()
    {
        $this->encendido = true;
    }
}

$pcLenovo = new PcLenovo();
$pcLenovo->arrancarSoftware();
$pcLenovo->encender();
var_dump($pcLenovo);
