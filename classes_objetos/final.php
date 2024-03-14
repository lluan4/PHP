<div class="titulo">Final</div>

<?php 
abstract class Abstrata2 {
    abstract public function metodo1();

    final public function metodo2() {
        echo 'Não vou mudar! <br>';
    }
}
class Classe1 extends Abstrata2 {   
    
    public function metodo1() {
        echo 'Executando método 1<br>';
    }

    /* public function metodo2(){
        echo 'Extendendo método 2<br>';
    } */
}
$classe = new Classe1();
$classe->metodo1();
$classe->metodo2();

final class Unica {
    public $att = "valor";
}


$unica = new Unica();
echo $unica->att;
/* class Duplicata extends Unica {
    public $att2;
} */

?>