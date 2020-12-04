<?php

//  Definir una clase(Molde para crear mas objetos de tipo de coches con caractaristicas parecidas)
class Coche
{
    // Atributos o propiedades (antes variables)
    // PUBLIC: Podemos acceder desde cualquier lugar, dentro de la clase actual o dentro de clases que hereden esta clase o fuera de la clase
    // PROTECTED: Podemos acceder desde la clase que los define y desde clases que hereden esta clase
    // PRICATE: Unicamente se pueden acceder desde esta clase
    public $color;
    protected $marca;
    private $modelo;
    public $velocidad;

    /* Constructor, primer metodo que se ejecuta para dar valores a los atributos de un objeto, 
       no devuelve datos, siempre es public y se llama automaticamente al crearlo*/

    public function __construct($color, $marca, $modelo, $velocidad)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
    }

    // Metodos, son acciones que hace un objeto (antes funciones)
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
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

    // Tipo de dato int, array o objeto
    public function mostrarInformacion(Coche $miObjeto){
        if(is_object($miObjeto)){           
            $informacion = "<h1>Informacion del coche</h1>";
            $informacion .= "Color".$miObjeto->color;
            $informacion .= "<br> Modelo".$miObjeto->modelo;
            $informacion .= "<br> Velocidad".$miObjeto->velocidad;
        }else{
            $informacion = "Tu dato es este: $miObjeto";
        }

        return $informacion;
    }
}
