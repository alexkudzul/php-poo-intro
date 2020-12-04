<?php

// #------------En ves de utilizar manualmente el require, se crea una funcion de autoload-------------#

// require_once 'clases/usuario.php';
// require_once 'clases/categoria.php';
// require_once 'clases/entrada.php';

// #-------------------Utilizamos la funcion de autoload----------------------------------#


require_once 'autoload.php';

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

/*
$usuario = new Usuario();
echo $usuario->nombre;
echo "<br>";
echo $usuario->email;
*/


class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }

    // Muestra informacion de constantes de una clase
    public function informacion(){
        echo "<h1>Muestra informacion de constantes de una clases</h1>";

        echo "La clase se encuentra en: ". __CLASS__;
        
        echo "<br>El metodo se encuentra en: ". __METHOD__;
        
        echo "<br>El fichero se encuentra en: ". __FILE__;
        
        echo "<br>La funcion se encuentra en: ". __FUNCTION__;
        // No tiene un namespace ya que se encuentra en la principal
        echo "<br>El namespace se encuentra en: ". __NAMESPACE__;
    }
}

// Objeto Principal
$principal = new Principal();
var_dump($principal->usuario);

// Objeto de otro paquete
$usuario = new UsuarioAdmin();
var_dump($usuario);


// ---------La comprobacion de metodos o clases, es para verificar si una clase o metodo esta cargada en el fichero--------------

// Comprobar si existe una clase
// El arroba esconde el warnig
$clase = @class_exists('PanelAdministrador\Usuario');

if($clase){
    echo "<h1>La clase si existe</h1>";
}else{
    echo "<h1>La clase no existe</h1>";
}

// Comprueba si existen metodos en una clase
$usuarioAdmin = new UsuarioAdmin;
$metodos = get_class_methods($usuarioAdmin);
var_dump($metodos);

$busqueda = array_search('getNombre', $metodos);
if($busqueda){
    echo "<h1>Si existe el metodo</h1>";
}else{
    echo "<h1>No existe el metodo</h1>";
}
var_dump($busqueda);



// -----------------------------Muestra constantes de una clase -------------------------------
$principal->informacion();

?>