<div class="titulo">MAP e FILTER</div>

<?php 
$notas = [5.8, 7.3, 9.8, 6.7];

foreach ($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo '<br>';

$notasFinais2 = array_map('round', $notas);
print_r($notasFinais2);

echo '<br>';

function aprovados($nota) {
    return $nota >= 7;
};

echo '<br>';

$apenasAprovados = array_filter($notas, 'aprovados');

print_r($apenasAprovados);

echo '<br>';

function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

$notasFinais2 = array_map('calculoLegal', $notas);
print_r($notasFinais2);
?>
