<?php namespace DESAFIO; ?>

<div class="titulo">Desafio</div>

<?php
class DivByZeroExcepetion extends \Exception {
    public function __construct($message, $code = 0,
        $previous = null) {
            echo "Erro Personalizado: $message<br>";
            parent::__construct($message, $code, $previous);
        }
}
function intdiv($numerador, $denominador) {
    if($denominador == 0) {  
        throw new DivByZeroExcepetion(
            "Dividindo por zero");
    }
    if(!is_int($numerador / $denominador)) {
        //echo 'passei aqui 2<br>';
        throw new DivByZeroExcepetion(
            "Resultado não inteiro");
    }
    return $numerador / $denominador . '<br>';
}

$teste = [2, 3, 0];

foreach($teste as $num) {
    try {
        echo intdiv(8,$num);
    } catch(DivByZeroExcepetion $e) {
        //echo 'passei aqui 1<br>';
    }
}
echo \intdiv(8,3);




?>