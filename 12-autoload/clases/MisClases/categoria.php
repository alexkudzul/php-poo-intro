<?php

// Agrupa clases en paquetes, Indica que esta clase pertenece a la carpeta MisClases(Paquete)
namespace MisClases;

class Categoria{
    public $nombre;
    public $descripcion;

    public function __construct()
    {
        $this->nombre = "Accion";
        $this->descripcion = "Peliculas Accion";
    }
}


?>