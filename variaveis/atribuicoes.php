<div class="titulo">Atribuições</div>

<?php 
$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 3;
echo '<br>' . $numero;

$numero = $numero + 1.5;
echo '<br>' . $numero;

$numero--;
echo '<br>' . $numero;

--$numero;
echo '<br>' . $numero;

$numero++;
echo '<br>' . $numero;

++$numero;
echo '<br>' . $numero;

$numero -= 5;
echo '<br>' . $numero;

$numero += 5;
echo '<br>' . $numero;

$numero *= 5;
echo '<br>' . $numero;

$numero /= 5;
echo '<br>' . $numero;

$numero %= 5;
echo '<br>' . $numero;

$numero **= 2;
echo '<br>' . $numero;

$numero **= 1/2;
echo '<br>' . $numero;

$numero .= 'oi';
echo '<br>' . $numero;

$texto = "Esse é um texto";
echo '<br>' . $texto;
$texto .= " editado uma vez";
echo '<br>' . $texto;
$texto .= " editado duas vezes";
echo '<br>' . $texto;

// $variavelInexistente = "valor existente";
echo '<br>' . $variavelInexistente;
echo '<br>';
var_dump($variavelInexistente);
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;
?>