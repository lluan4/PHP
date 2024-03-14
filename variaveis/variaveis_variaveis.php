<div class="titulo">Variáveis Variáveis</div>

<?php 

$a = 'valorA';
$$a = 'valorAA';

echo 'Tenho duas variáveis declaradas: <br>';
echo "1 - \$a = '$a' <br>";
echo "2 - $$" . "a  = 'valorAA'<br>";
echo '($$a = valorAA) == ($valorA = valorAA)<br>';
echo "$a {$$a} <br>";

$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!!';

echo "$epa {$$epa} {$$$epa}";
?>