<?php

class Configuracion
{

    // Propiedades staticas se puede acceder a ella sin que se instacie el objeto, en vez de utilizar $this-> se utiliza self::

    public static $color;
    public static $newsletter;
    public static $entorno;

    public static function getColor()
    {
        return self::$color;
    }
    public static function setColor($color)
    {
        self::$color = $color;
    }
    public static function getNewsLetter()
    {
        return self::$newsletter;
    }
    public static function setNewsLetter($newsletter)
    {
        self::$newsletter = $newsletter;
    }
    public static function getEntorno()
    {
        return self::$entorno;
    }
    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }
}
