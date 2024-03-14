<div class="titulo">Herança</div>

<?php 
class Pessoa 
{
    public $nome;
    public $idade;

    function __construct($nome, $idade) 
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada<br>';
    }

    function __destruct()
    {
        echo 'Pessoa deletada';
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade}<br>";
    }
}

class Usuario extends Pessoa 
{
    public $login;

    function __construct($nome, $idade, $login)
    {
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuário Criado<br>';
        
    }
    function __destruct()
    {
        parent::__destruct();
        echo 'Usuário deletado';
    }
    public function apresentar()
    {
        parent::apresentar();
        echo "{$this->login}: <br>";
    }
}

$usuario = new Usuario('Gustavo', 21, 'gust_mend');
$usuario->apresentar();

unset($usuario)
?>