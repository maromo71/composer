<?php

namespace Automais\Loja;

class Carro {
    public $id;
    public $marca;
    public $modelo;
    public $ano;
    public $clienteId;

    public function __construct($id, $marca, 
    $modelo, $ano, $clienteId) {
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->clienteId = $clienteId;
    }

    public function detalhes() {
        return "Carro: {$this->marca} {$this->modelo}, 
        Ano: {$this->ano}";
    }
}
