<?php

// Agrupa clases en paquetes, Indica que esta clase pertenece a la carpeta PanelAdministrador(Paquete)
namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Alex Ku Dzul";
        $this->email = "alex2@alex2.com";
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