<div class="titulo">Traits #01</div>

<?php 
trait validacao {
    public $a = "Valor A";
    public function validarString($str) : bool {
        return isset($str) and $str !== "";
    }
}
trait validacaoMelhorada {
    public $b = "Valor B";
    private $c = "Valor C (private)";
    public function validarStringMelhorada($str) : bool {
        return isset($str) and trim($str);
    }
    public function imprimirValorC() : void {
        echo '<br>', $this->c;
    }
}

class Usuario2 {
    use validacao, validacaoMelhorada;


}

$pessoa1 = new Usuario2();
var_dump($pessoa1->validarString("   ")); 
echo '<br>';
var_dump($pessoa1->validarStringMelhorada("   ")); 
echo '<br>';
echo $pessoa1-> a;
echo '<br>';
echo $pessoa1-> b;
$pessoa1->imprimirValorC();

?>