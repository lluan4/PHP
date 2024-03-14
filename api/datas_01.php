<div class="titulo">Datas #01</div>

<?php 
// Retorna a quantidade de tempo que passou desde o marco zero
// 01/01/1970

date_default_timezone_set('America/Sao_Paulo');

echo time() . '<br>';
echo date('D, d \d\e M \d\e\ Y H:i A')  .'<br>';

setlocale(LC_TIME, 'pt_BR', 'ptb.utf-8');

echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>';
?>