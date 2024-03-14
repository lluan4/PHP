<div class="titulo">Valor vs Referência</div>

<?php 
$variavel = 'valor inicial';
echo $variavel, '<br><br>';

// Atribuição por Valor
$variavelValor = $variavel;
echo $variavelValor, '<br>';
$variavelValor = 'novo valor';
echo $variavel, '<br>';
echo $variavelValor, '<br><br>';

// Atribuição por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';
echo $variavel, '<br>';
echo $variavelReferencia, '<br><br>';
echo $variavelValor, '<br><br>';
?>