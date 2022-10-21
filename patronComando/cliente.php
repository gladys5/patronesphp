<?php

namespace patronComando;

require_once 'comando.php';
require_once 'receptor.php';
require_once 'invocador.php';
$receptor = new Receptor();
$comando = new Comando($receptor);
$invocador = new Invocador();
$invocador->setComando($comando);
$invocador->ejecutarComando();
