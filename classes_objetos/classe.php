<div class="titulo">Primeira Classe</div>

<?php 
class Cliente {
    //Atributos
    public $nome = 'Anônimo';
    public $idade = 18;
    public function apresentar() : void {
        echo "Nome: {$this->nome}<br> Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();
$c1->nome = 'Ana Silva';
$c1->idade = 27.5;

echo $c1->nome, '<br>';

$c2 = new Cliente;
$c2->nome = 'Gabriela';
$c2->idade = 45;

$c1->apresentar();
$c2->apresentar();
?>