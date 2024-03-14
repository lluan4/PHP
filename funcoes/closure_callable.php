<div class="titulo">Closure & Callable</div>

<?php  
$soma1 = function($a, $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
};

function executar1($a, $b, $op, Callable $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
};

function executar2($a, $b, $op, Closure $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
};

echo $soma1(2, 3) . '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo soma2(2, 3) . '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo '<br>';
executar1(2, 3, '+', $soma1);
executar1(2, 3, '+', 'soma2');

echo '<br>';
executar2(22, 33, '+', $soma1);
// executar2(25, 34, '+', 'soma2');
?>