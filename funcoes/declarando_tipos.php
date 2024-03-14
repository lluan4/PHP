<div class="titulo">Declarando Tipos</div>

<?php 
function somar1($a, $b) : string{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

function somar2(int $a, int $b) : string {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

function somar3($a, $b) : int {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}


echo somar3(1, 3) . '<br>';
echo somar3(1.7, 3.7) . '<br>';
echo somar3(1.7, "2.7") . '<br>';

?>