<div class="titulo">Classe Abstrata</div>

<?php 
abstract class Abstrata {
    public abstract function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1() : void {
        echo "Executando método 1<br>";
    }
    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1() : void {
        echo "Executando método 1 extendido<br>";
        parent::metodo1();
    }
    protected function metodo2($parametro) : void {
        echo "Executando método 2, com parametro $parametro<br>";
    }
    public function metodo3() : void {
        echo "Executando método 3 extendido<br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
$c->metodo3();

echo"<br>";
var_dump($c);

echo"<br>";
var_dump($c instanceof Concreta);

echo"<br>";
var_dump($c instanceof FilhaAbstrata)  ;


?>