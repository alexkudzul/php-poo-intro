<?php

/**
 * Una excepción puede ser lanzada ("thrown"), y atrapada ("catched") dentro de PHP. 
 * El código puede estar dentro de un bloque try para facilitar la captura de excepciones potenciales. 
 * Cada bloque try debe tener al menos un bloque catch o finally correspondiente.
 */

// Una excepcion es un fallo o un error que se produce en el codigo

// Try Catch captura excepciones, en codigo susceptible a errores

try {

    if (isset($_GET['id'])) {
        echo "<h1>El parametro es: {$_GET['id']} </h1>";
    } else {
        throw new Exception('Faltan parametros por la URL');
    }
    // $e es una instancia de la clase Exception, por lo que tiene acceso a todos los métodos de esa clase. 
} catch (Exception $e) {

    echo "Hay un error: " . $e->getMessage();

}
// finally {

//     echo "Todo correcto";

// }

// finally se ejecuta cuando alla terminado toda la estructura del try catch, sin embargo no se suele utilizar mucho

// Hemos lanzado una excepción y el código detiene su ejecución ya que se produce un error fatal. Podemos en cambio 
// capturar ese error y continuar con el script:

/*
<?php
try {
    // init bootstrapping phase
 
    $config_file_path = "config.php";
 
    if (!file_exists($config_file_path))
    {
      throw new Exception("Configuration file not found.");
    }
  
    // continue execution of the bootstrapping phase
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}
?>
*/


?>