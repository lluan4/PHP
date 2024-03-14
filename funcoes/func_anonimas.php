<div class="titulo">Funções Anônimas</div>

<?php 

$soma = function ($a, $b) {
    return $a + $b;
};

function executar ($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
};

$multiplicacao = function ($a, $b) {
    return $a * $b;
};

function divisao($a, $b) {
    return $a / $b;
}

executar (1, 2, '/', 'divisao') . '<br>';

 ?>