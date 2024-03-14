<div class="titulo">Mapa</div>

<?php 
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 47.9
);

print_r($dados);

echo "<br>" . $dados["idade"];
echo "<br>" . $dados["cor"];
echo "<br>" . $dados["peso"];

$dados[] = 'i';
echo '<br>';
print_r($dados);

$dados['vinte'] = 'j';
echo '<br>';
print_r($dados);

echo "<br>";
$lista = array(
    '09' => 1,
    2
);

print_r($lista);

echo "<br>";
$lista = array(
    '9' => 1,
    2
);

print_r($lista);
?>