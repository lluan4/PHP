<div class="titulo">Interface</div>

<?php 
interface Animal {
    function respirar();
}
interface Canino extends Animal{
    function latir();
}

class Cachorro implements Canino{
    public function respirar() : void {
        Echo 'Respira<br>';
    }
    public function latir() : void {
        Echo 'Au au';
    }

}

$animal1 = new Cachorro;
$animal1 ->respirar();
$animal1 ->latir();
Echo '<br>';
var_dump($animal1 instanceof Cachorro);
Echo '<br>';
var_dump($animal1 instanceof Canino);
Echo '<br>';
var_dump($animal1 instanceof Animal);
?>