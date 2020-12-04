<?php

// $class es la clase que se quiere cargar
function app_autoloader($class){
    // Busca las clases en un directorio
    require_once 'clases/' . $class . '.php';
}

// ejecuta la function para buscar toda las clases del directorio que se le indique
spl_autoload_register('app_autoloader');

?>