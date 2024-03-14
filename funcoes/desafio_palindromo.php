<div class="titulo">Desafio Palindromo</div>

<?php 

$palavra = 'Lucas';
if(ValidarPalindromo(Minuscula($palavra))){
    echo"A palavra '$palavra' é palindroma";
} else {
    echo"A palavra '$palavra' não é palindroma";
};




function ValidarPalindromo($palavra) : bool {
    $j = strlen($palavra);
    for($i=0; $i < strlen($palavra); $i++) {
        $j--;
        if($palavra[$i] !== $palavra[$j]){
            return false;
        }
    }
    return true;
}

function Minuscula($palavra) : string {
    return strtolower($palavra);
}

function PalindromoSimples($palavra) : string {
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}



?>