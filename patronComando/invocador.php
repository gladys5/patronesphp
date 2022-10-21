<?php

namespace patronComando;

class Invocador
{
    protected $comando;
    public function setComando(Comando $comando)
    {
        $this->comando = $comando;
    }
    public function ejecutarComando()
    {
        $this->comando->ejecutar();
    }
}
