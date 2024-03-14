<div class="titulo">Visibilidade</div>

<?php 
class A
{
    public $publico = 'Público';
    protected $protegido = "Protegido";
    private $privado = "Privado";
    public function mostrarA() {
        $this->naoMostrarA();
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    private function naoMostrarA() {
        echo "Não vou imprimir!<br>";

    }
}

class B extends A
{
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        //echo "Class B) Privado = {$this->privado}<br>";
    }
}

$a = new A();
$a->MostrarA();
// $a->naoMostrarA();

echo '<br>';

$b = new B();
$b->MostrarB();

echo '<br>';

$b->MostrarA();
echo 'Fim!'
?>