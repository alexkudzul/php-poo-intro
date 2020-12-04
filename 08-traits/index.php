<?php

// Traits permite definir una serie de metodos para compartirlo en diferentes clases
// Para utilizar un trait en una clase se utiliza la palabra reservada use y el nombre del trai ejemplo "use Utilidades"
trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}
class Coches
{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona
{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class VideoJuego
{
    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new Coches();
$coche->nombre = "Coche 1";
$coche->mostrarNombre();

var_dump($coche);

$persona = new Persona();
$persona->nombre = "Persona 1";
$persona->mostrarNombre();

var_dump($persona);

$videojuego = new VideoJuego();
$videojuego->nombre = "Videojuego 1";
$videojuego->mostrarNombre();

var_dump($videojuego);
