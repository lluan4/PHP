<div class="titulo">Construtor & Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo "Contrutor invocado<br>";
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "E morreu<br>";
    }

    public function apresentar() : void {
        echo "Nome: {$this->nome}<br> Idade: {$this->idade}<br>";
    }
}


$pessoa1 = new Pessoa("Rebeca", 40);
$pessoa1->apresentar();
$pessoa1 = null;


$pessoa2 = new Pessoa("Kaleb");
$pessoa2->apresentar();
unset($pessoa2);
 ?>