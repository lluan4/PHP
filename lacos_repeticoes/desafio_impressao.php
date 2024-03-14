<div class="titulo">Desafio Impressão</div>

<?php 
$array = array(
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
);

for ($i=0; $i <= count($array); $i++) { 
    if($i % 2 === 1) continue;
    echo "{$array[$i]} <br>";
}

echo '<hr>';

foreach ($array as $key => $value) {
    if($key % 2 === 1) continue;
    echo "{$value} <br>";
}
?>