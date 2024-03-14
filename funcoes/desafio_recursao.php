<div class="titulo">Desafio Recursão</div>

<?php 

function ClassificarNumeros($array, $linha = 0, $coluna = 0, $camada = 0) {
    if($linha >= count($array)) return;

    if(is_array($array[$linha])) {
        if(is_array($array[$linha][$coluna])) {
            if($camada < count($array[$linha][$coluna])) {
                echo ">>> " . $array[$linha][$coluna][$camada] . "<br>";
                ClassificarNumeros ($array, $linha, $coluna, $camada + 1);
            } else {
                if ($coluna < count($array[$linha])) {
                    ClassificarNumeros ($array, $linha, $coluna + 1, 0);
                } else {
                    ClassificarNumeros ($array, $linha + 1, 0, 0);
                }      
            }
        } else {
            if ($coluna < count($array[$linha])) {
                echo ">> " . $array[$linha][$coluna] . "<br>";
                ClassificarNumeros ($array, $linha, $coluna + 1);
            } else {
                ClassificarNumeros ($array, $linha + 1, 0);
            }
        }
    } else {
        echo "> " . $array[$linha] . "<br>";
        ClassificarNumeros ($array, $linha + 1);
    }
}



function VarrerMatriz($matriz, $linha = 0, $coluna = 0) {
    if($linha >= count($matriz)) return;

    echo $matriz[$linha][$coluna] . " ";

    if($coluna <= count($matriz[$linha])){
        VarrerMatriz($matriz, $linha, $coluna + 1);
    } else {
        VarrerMatriz($matriz, $linha + 1, 0);
    }
}

function Resolucao ($array, $nivel = ">") {
    foreach ($array as $elemento) {
        if(is_array($elemento)){
            Resolucao($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}

$array = [
    1,
    2,
    [3, 4, 5],
    6,
    [
        7,
        [8, 9]
    ],
    10
];

//echo is_array($array[2]);

Resolucao($array)

 ?>