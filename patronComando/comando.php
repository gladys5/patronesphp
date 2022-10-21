<?php
include_once 'receptor.php';
'cliente.php';
'invocador.php';
?>

<?php
//la interfaz
namespace patronComando;

class Comando
{
    protected $receptor;
    public function __construct(Receptor $receptor)
    {
        $this->receptor = $receptor;
    }
    public function ejecutar()
    {
        $this->receptor->accion();
    }
}
?>


El patrón de diseño Comando es un patrón de comportamiento. El patrón de diseño Comando encapsula una solicitud
como un objeto, lo que permite parametrizar otros objetos con diferentes solicitudes, poner en cola o registrar solicitudes, y soportar operaciones que no pueden ser realizadas de forma sencilla.