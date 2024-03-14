<div class="titulo">Arrays Constantes</div>

<?php 
const FRUTAS = ['laranja', 'abacaxi'];

//FRUTAS[0] = 'banana';
//FRUTAS[] = 'banana';

echo FRUTAS[0];

const CARROS = ['fiat'=>'Uno', 'ford'=>'Fiesta'];
echo '<br>' . CARROS['fiat'];

define('CIDADES', array('Belo Horizonte', 'Recife'));
Echo '<br>' . CIDADES['1'];
 ?>