<div class="titulo">Casting</div>

<?php
echo "Input = is_int(PHP_INT_MAX)";
echo "<br>Output = ", is_int(PHP_INT_MAX);

echo "<br><br>int para float";
echo "<br>Input = var_dumb((float) 3)";
echo "<br>Output = ", var_dump((float) 3);

echo "<br><br>float para int";
echo "<br>Input = var_dumb((int) 3.9)";
echo "<br>Output = ", var_dump((int) 3.9);

echo "<br><br>Operações com string";
echo "<br>Input = var_dumb(3 + '2')";
echo "<br>Output = ", var_dump(3 + "2");
echo "<br>Input = var_dumb(3 . '2')";
echo "<br>Output = ", var_dump(3 . "2");
echo "<br>Input = is_string(3 . '2')";
echo "<br>Output = ", is_string(3 . "2");
echo "<br>Input = is_string(3 + '2')";
echo "<br>Output = ", is_string(3 + "2");
echo "<br>Input = var_dumb(3 + '2 dois')";
echo "<br>Output = ", var_dump(3 + "2 dois");
echo "<br>Input = var_dumb(3 + 'dois 2')";
echo "<br>Output = ", var_dump(3 + "dois 2");

?>