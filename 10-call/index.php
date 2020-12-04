<?php

// Cuando ejecutamos un metodo que no existe, se ejecutara el metodo call a modo de metodo sustituto

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;

    }

    public function __call($name, $arguments)
    {
        // Extrae los primeros 3 letras del nombre del metodo
        $prefix_metodo = substr($name, 0, 3);

        // Si es igual a get, convertirlo a minuscula y que muestre la palabra apartir de la tercera letra
        if($prefix_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name), 3);

            if(!isset($this->$nombre_metodo)){
                
                return "El metodo no existe";   
            }

            // Es igual a $this->nombre;
            return $this->$nombre_metodo;
        }else{
            return "El metodo no existe";
        }
    }

}

$persona = new Persona("Alex",24,"Mérida");
// No existe el metodo getNombre deberia de marcar un error, pero al tener el metodo __call, se ejecutara automaticamente
echo $persona->getNombre()."<br>";
echo $persona->getEdad()."<br>";
echo $persona->getCiudad()."<br>";
echo $persona->getHola();// No existe

?>