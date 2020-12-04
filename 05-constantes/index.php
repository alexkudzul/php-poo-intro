<?php

class Usuario
{
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;

    public function getEmail()
    {
        // self::URL_COMPLETA;
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
}

$usuario = new Usuario();
echo $usuario::URL_COMPLETA;

// Se puede acceder a una constante sin que se instancie un objeto, 
// ya que const esta a nivel de una clase como una static
echo Usuario::URL_COMPLETA;
var_dump($usuario);
