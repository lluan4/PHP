<div class="titulo">Recursividade</div>

<?php 
function somaUmAte($numero) {
    $soma = 0;
    for($i = 0; $i <= $numero ; $numero--) {
        $soma += $numero;
    }
    return $soma;
}

function somaRecursivaUmAte($numero) {
   if($numero === 1) return 1;
   return $numero + somaRecursivaUmAte($numero - 1);
}

function somaRecursivaTernario($numero) {
    
    return $numero === 1 ? 1 : $numero + somaRecursivaTernario($numero - 1);
 }

echo somaUmAte(10) . '<br>';
echo somaRecursivaUmAte(2) . '<br>';
echo somaRecursivaTernario(2) . '<br>';
?>