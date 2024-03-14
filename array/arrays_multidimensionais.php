<div class="titulo">Arrays Multidimensionais</div>

<?php 
$dados =[
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 24,
        "naturalidade" => "Bahia"
    ],
];

print_r($dados);

echo '<br>' . $dados[0]['idade'];

$dados[] = [
    "nome" => "Florida",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

echo '<br>';

print_r($dados);

echo '<br>' . $dados[2]['idade'];

echo '<br>';

$dados[2]["vizinho"] = "Chaves";

print_r($dados);

unset($dados[1]);
echo '<br>';
print_r($dados);
 ?>