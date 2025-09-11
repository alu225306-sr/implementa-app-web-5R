<?php
//aplicacion para imprimir mensaje de bienvenida
//creado por janis Andrea Prieto De La Cruz
//fecha:10/septiembre/2025
//appweb1.php
class mensaje
{
    public $mensaje1="bienvenidos a app web";
    public $mensaje2="Janis Andrea Prieto De La Cruz";
    public function imprimir_mensaje()
    {
        print" <h1>$this->mensaje1</h1>";
        print "<h2>$this->mensaje2</h2>";
    }
}
$obj1=new mensaje; // se crea eñ odjeto de tipo mensaje
$obj1->imprimir_mensaje();
?>