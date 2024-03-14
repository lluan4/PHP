<div class="titulo">Comparação Array</div>

<?php 
$array1 = ['nome' => 'Maria', 'idade' => 20];
$array2 = ['nome' => 'Maria', 'idade' => 20];

var_dump($array1 == $array2);
echo '<br>';
var_dump($array1 === $array2);
echo '<hr>';

$array3 = ['idade' => 20, 'nome' => 'Maria'];

var_dump($array1 == $array3);
echo '<br>';
var_dump($array2 == $array3);
echo '<br>';
var_dump($array1 === $array3);
echo '<br>';
var_dump($array2 === $array3);
echo '<br>';
var_dump($array2 != $array3);
echo '<br>';
var_dump($array2 !== $array3);
echo '<hr>';

$array4 = ['idade' => '20', 'nome' => 'Maria'];

var_dump($array1 == $array4);
echo '<br>';
var_dump($array2 == $array4);
echo '<br>';
var_dump($array1 === $array4);
echo '<br>';
var_dump($array2 === $array4);
echo '<br>';
var_dump($array2 != $array4);
echo '<br>';
var_dump($array2 !== $array4);

?>