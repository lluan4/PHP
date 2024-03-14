<div class="titulo">Membros Estáticos</div>

<?php 
class A {
    public $naoStatic = "Variável de instância";
    public static $static = "Variável de classe (estática)";

    public function mostrarA() : void {
        echo "Não estático = {$this->naoStatic}<br>";
        //Tentativa 1
        echo "Estático = {$this->static}<br>";
        //Tentativa 2
       // echo "Estático = {self::$static}<br>";
        //Tentativa 2
        echo "Estático = " . self::$static . "<br>";
    }

    public static function MonstrarStaticA() : void {
        //echo "Não estático = {$this->naoStatic}<br>";
        echo "Estático = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
//objetoA->MonstrarStaticA();
echo "<br>";
echo A::$static, '<br>';
A::MonstrarStaticA();

echo "<br>";
A::$static = "Alterado membro de classe";
echo A::$static, '<br>';

?>