<?php

// Agrupa clases en paquetes, Indica que esta clase pertenece a la carpeta MisClases(Paquete)
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Alex";
        $this->email = "alex@alex.com";
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
}

?>