<?php

/**
 * Herencia: Comparte atributos y metodos entre clases
 *
 */

class Persona
{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function hablar()
    {
        return "Estoy hablando";
    }
    public function caminar()
    {
        return "Estoy caminando";
    }
}

class IngenieroSistemas extends Persona
{

    public $lenguajes;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguajes = "PHP, JS";
        $this->experienciaProgramador = 10;
    }

    public function setLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }

    public function programarWeb()
    {
        return "Estoy programando Web";
    }
    public function programarMobil()
    {
        return "Estoy programando Mobil";
    }
}

class TecnicoRedes extends IngenieroSistemas{
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct()
    {
        /* Por defecto una clase hijo no podra heredar el constructor de la clase padre, 
            por ende se tiene  que utilizar la palabra reservada parent::__construct();*/
        parent::__construct();

        $this->auditarRedes = "Si";
        $this->experienciaRedes = 9;
    }

    public function auditaria(){
        return "Estoy realizando una auditoria";
    }
}
