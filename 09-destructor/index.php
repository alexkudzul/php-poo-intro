<?php

// Destructor se ejecuta cuando detecta que el objeto creado ya no es llamado o ejecutado de nuevo a la pagina
class Usuario{
   public $nombre;
   public $email;
   
   public function __construct()
   {
       $this->nombre = "Alex";
       $this->email = "alex@alex.com";
       echo "Creando el objeto <br>";
   }

   public function __toString()
   {
      return "Hola, {$this->nombre}, estas registrado con {$this->email}";
   }

   public function __destruct()
   {
       echo "<br>Destruyendo el objeto";
   }
   
}

// Crea el objeto
$usuario = new Usuario();

// Con el toString se pudo imprimir el objeto completo como un string
echo $usuario;

// Ejecuta el codigo
// for($i = 0; $i <=50 ; $i++){
//     echo  $i."<br>";
// }

// Ya no hay nada que ejecute el objeto
// Se ejecuta automaticamente el constructor

?>