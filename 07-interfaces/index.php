<?php
// Una interface, define que metodos y en que orden van a estar en una clase

interface Ordenador
{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

// Cuando se implementa una interface se tiene que definir los metodos que tiene en la clase hija, si no marcara error
class iMac implements Ordenador
{
    private $modelo;

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function encender()
    {
        return "Encender";
    }
    public function apagar()
    {
        return "Apagar";
    }
    public function reiniciar()
    {
        return "Reiniciar";
    }
    public function desfragmentar()
    {
        return "Desfragmentar";
    }
    public function detectarUSB()
    {
        return "Detectar Usb";
    }

}

$mac = new iMac();
$mac->setModelo("MacBook Pro");
echo $mac->getModelo();
var_dump($mac);
