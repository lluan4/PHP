<div class="titulo">Argumentos e Retornos</div>

<?php 
function obterMensagem() : string {
    return 'Seja bem vindo(a)';
}

echo '<br>';

echo obterMensagem();
$m = obterMensagem();

echo '<br>';
echo $m;
echo '<br>';

var_dump(obterMensagem());

echo '<br>', obterMensagemComNome('Luan');

function obterMensagemComNome($nome) : string {
    return "Bem vindo, {$nome}!";
}

function soma($a, $b) : int {
    return $a + $b;
}

echo '<br>', soma(10, 20);
$x = 40;
$y = 20;
echo '<br>', soma($x, $y);

function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>', $variavel;


trocarValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}
?>