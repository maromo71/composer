<?php
namespace Automais\Loja;

class Cliente {
    public $id;
    public $nome;
    public $email;
    public $telefone;

    public function __construct($id, $nome, 
    $email, $telefone) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function apresentar() {
        return "Cliente: {$this->nome}, Email: {$this->email}, 
        Telefone: {$this->telefone}";
    }
}
