<?php

require_once __DIR__ . '/vendor/autoload.php';

use Automais\Loja\Cliente;
use Automais\Loja\Carro;

// Instanciando objetos
$cliente1 = new Cliente(1, "João da Silva", 
"joao@example.com", "11987654321");
$carro1 = new Carro(1, "Toyota", "Corolla", 2020, 1);

// Utilizando os objetos
echo $cliente1->apresentar() . "<br>";
echo $carro1->detalhes() . "<br>";
