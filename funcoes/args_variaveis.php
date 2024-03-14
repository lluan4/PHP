<div class="titulo">Argumentos Variáveis</div>

<?php

use JetBrains\PhpStorm\NoReturn;

function Soma($a, $b) : float {
    return $a + $b;
}

function SomaCompleta(...$numeros) : float {
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

function Membros($titular, ...$dependentes) : void {
    echo "Titular: $titular <br>";
    if ($dependentes) {
        foreach ($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}

echo Soma(14, 15, 6, 7, 8, 9) . "<br>";
echo Soma(6, 5) . "<br>";
echo SomaCompleta(6, 5, 14, 15) . "<br>";
echo Membros("Ana Silva", "Pedro", "Rafaela", "Amanda") . "<br>";

?>