<div class="titulo">Operadores Relacionais</div>

<?php 

echo 'Operador de igualdade:<br>';
echo '==<br>';
echo 'Input: var_dump(1 == 1) <br>';
echo 'Output: ', var_dump(1 == 1), '<br>';
echo 'Input: var_dump(1 == "1") <br>';
echo 'Output: ', var_dump(1 == "1"), '<br><br>';

echo 'Operador de idêntico:<br>';
echo '===<br>';
echo 'Input: var_dump(1 === 1) <br>';
echo 'Output: ', var_dump(1 === "1"), '<br>';
echo 'Input: var_dump(1 === 1) <br>';
echo 'Output: ', var_dump(1 === "1"), '<br><br>';

echo 'Operador de maior:<br>';
echo '><br>';
echo 'Input: var_dump(1 > 1) <br>';
echo 'Output: ', var_dump(1 > 1), '<br><br>';

echo 'Operador de maior igual:<br>';
echo '>=<br>';
echo 'Input: var_dump(1 >= 1) <br>';
echo 'Output: ', var_dump(1 >= 1), '<br>';

echo 'Operador de menor:<br>';
echo '<<br>';
echo 'Input: var_dump(1 < 1) <br>';
echo 'Output: ', var_dump(1 < 1), '<br><br>';

echo 'Operador de menor igual:<br>';
echo '<<br>';
echo 'Input: var_dump(1 <= 1) <br>';
echo 'Output: ', var_dump(1 <= 1), '<br><br>';

echo 'Operador de diferente:<br>';
echo '!=<br>';
echo 'Input: var_dump(1 != 1) <br>';
echo 'Output: ', var_dump(1 != 1), '<br><br>';
echo 'Input: var_dump(1 != "1") <br>';
echo 'Output: ', var_dump(1 != "1"), '<br><br>';

echo 'Operador de diferente idêntico:<br>';
echo '!==<br>';
echo 'Input: var_dump(1 !== 1) <br>';
echo 'Output: ', var_dump(1 !== 1), '<br>';
echo 'Input: var_dump(1 !== "1") <br>';
echo 'Output: ', var_dump(1 !== "1"), '<br><br>';

echo 'Operador de diferente:<br>';
echo '<><br>';
echo 'Input: var_dump(1 <> 1) <br>';
echo 'Output: ', var_dump(1 <> 1), '<br><hr>';

echo '<p> Relacionais no If/Else</p>';
$idade = 15;

echo "Input: {$idade} <br>";
if($idade < 18) {
    echo "Menor de idade = $idade anos <br>";
} else if($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos<br>";
};

echo '<hr>';

echo '<p>Spaceship</p>';
echo ' Spaceship: <=><br>';
echo 'Input: var_dump(500 <=> 1) <br>';
echo 'Output: ', var_dump(500 <=> 1), '<br>';
echo 'Input: var_dump(1 <=> 1) <br>';
echo 'Output: ', var_dump(1 <=> 1), '<br>';
echo 'Input: var_dump(-500 <=> 1) <br>';
echo 'Output: ', var_dump(-500 <=> 1), '<br>';

?>

<style> 
p {
    margin-block-start:0em;
    margin-block-end: 1em;
}
hr {
    margin-block-end: 0em;
}
</style>