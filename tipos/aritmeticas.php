<div class="titulo">Operações Aritméticas</div>

<?php
echo 'Soma: <br>';
echo 1+1, '<br>';
var_dump(1+1);
echo '<br>';
echo 1 + 2.5, '<br><br>';

echo 'Subtração: <br>';
echo 10 - 2, '<br><br>';

echo 'Multiplicação: <br>';
echo 2 * 5, '<br><br>';

echo 'Divisão retornando inteiro <br>';
echo 7 / 4, '<br>';
echo 'input = intdiv(7, 4), <br>';
echo 'output = ',intdiv(7, 4), '<br>';
echo 'output = ',round(7, 4), '<br>';
echo 'Divisão: Caso a divisão não tenha casas decimais, então o tipo será INT<br>';
echo 'input = var_dump(8 / 4), <br>';
echo 'output = ',var_dump(8 / 4), '<br>';
echo 'Divisão: Caso a divisão  tenha casas decimais, então o tipo será float<br>';
echo 'input = var_dump(7 / 4), <br>';
echo 'output = ',var_dump(7 / 4), '<br><br>';

echo 'Modulo <br>';
echo 'input = 7 % 2 <br>';
echo 'output = ',7 % 2, '<br>';
echo 'input = 8 % 2 <br>';
echo 'output = ',8 % 2, '<br><br>';

echo 'Exponêncial <br>';
echo 'input = 3 ** 3 <br>';
echo 'output = ',3 ** 3, '<br><br>';

// Precedência de oepradores
// () > ** > / * % > + -
?>