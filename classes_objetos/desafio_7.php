<div class="titulo">Desafio 7 erros</div>

<?php 

/* interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata extends Template {
    public function metodo3() {
        echo "Estou Funcionando";
    }
}

class Classe implements ClasseAbstrata {
    public function metodo3() {
        echo "Estou funcionando";
    }
    function __construct($parametro){

    }
}

$exemplo = Classe();
$exemplo.metodo3(); */


interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    abstract function metodo1();
    abstract public function metodo2($parametro);
    public function metodo3() {
        echo "Estou Funcionando";
    }
    
}

class Classe extends ClasseAbstrata {
    public $parametro;
    public function metodo1() {
        $this->metodo2($this->parametro);
    }
    public function metodo2($parametro) {
        $this->metodo3();
    }
    public function metodo3() {
        echo "Estou funcionando";
    }
    function __construct($parametro){
        $this->parametro = $parametro;
    }
}

$exemplo = new Classe('a');
$exemplo->metodo3();
?>