<div class="titulo">Array</div>

<?php 
$lista = array(1, 2, 3.4, "texto");

echo $lista . "<br>";
var_dump($lista);
print_r($lista);

echo "<br>" . $lista[2];
$lista[2] = 1234;
echo "<br>" . $lista[2];


$texto = 'Esse é um texto de teste';
echo "<br>" . $texto[8] ; // cuidado!
echo "<br>" . mb_substr($texto, 10, 1) ;
?>