<?php

// Agrupa clases en paquetes, Indica que esta clase pertenece a la carpeta MisClases(Paquete)
namespace MisClases;

class Entrada{
    public $titulo;
    public $fecha;

    public function __construct()
    {
        $this->titulo = "Titulo de la entrada";
        $this->fecha = "29 de junio de 2022";
    }
}


?>