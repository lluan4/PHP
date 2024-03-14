<div class="titulo">Operações com Arrays</div>


<?php  

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereco"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

$indice = array_rand($dadosCompletos);

echo '<br>' . "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo"{$dadosCompletos['idade']}";
unset($dadosCompletos['nome']);

echo '<br>';
print_r($dadosCompletos);

//unset($dadosCompletos);
//echo '<br>';
//var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo "<br>";
print_r($decimais);

$decimais = array_merge($pares, $impares);
echo "<br>";
print_r($decimais);

sort($decimais);
echo "<br>";
print_r($decimais);
?>
