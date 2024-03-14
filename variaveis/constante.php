<div class="titulo">Constante</div>

<?php 
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS . '<br><br>';

const NOVA_TAXA = 2.5;
echo NOVA_TAXA . '<br><br>';

$valorVariavel = 2.8;

define('NOVISSIMA_TAXA', $valorVariavel);
echo NOVISSIMA_TAXA . '<br><br>';

?>