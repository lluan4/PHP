<div class="titulo">Operadores Lógicos</div>

<?php 

echo "<p class='divisao'>V ou F</p> <hr class='divisao'>";
var_dump(true);
echo '<br>';
var_dump(!true);

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p> <hr class='divisao'>";
var_dump(true && true);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(true and false);

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p> <hr class='divisao'>";
var_dump(true || true);
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false or false);

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p> <hr class='divisao'>";
var_dump(true xor true);
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor false);

echo "<p class='divisao'>Exemplos</p> <hr class='divisao'>";
$idade  = 65;
$sexo   = 'M';
$pagouPrevidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === "M");
$criterioMulher = ($idade >= 60 && $sexo === "F");
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeAposentar = $atingiuCriterio && $pagouPrevidencia;

echo "$podeAposentar Pode se aposentar";
?>
