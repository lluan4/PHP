<div class="titulo">Datas #02</div>

<?php 
$formatoData1 = 'D, d \d\e\ M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

print_r($agora);
echo '<br>';

echo $agora->format($formatoData1) . '<br>';

setlocale(LC_TIME, 'pt_br');
echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';

$amanha = new DateTime('+1 day');
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';


$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');

echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';

$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime("now",$tz);
echo $agora->format('d/M/Y H:i:s');
?>