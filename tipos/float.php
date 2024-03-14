<div class="titulo">Float</div>

<?php
echo 1.1, '<br><br>';

echo 'Conferindo tipo da variável usando var_dump()<br>';
echo 'input = 1.0<br>';
echo 'output = ', var_dump(1.0), '<br><br>';

echo 'Valor máximo Float = ', PHP_FLOAT_MAX, '<br>';
echo 'Valor minímo Float = ', PHP_FLOAT_MIN, '<br><br>';

echo 'Usando notação na base 10:<br>';
echo 'input = 1.2e3<br>';
echo 'output = ', 1.2e3, '<br><br>';

echo 'Outra forma<br>';
echo 'input = 1.2E-3<br>';
echo 'output = ', 1.2E-3, '<br><br>';
?>