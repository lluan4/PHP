<div class="titulo">Gerenciando Sessão</div>

<<?php 
//session_id('208d9afecdd37cc8bb2f5c870b3430c2');
session_start();
echo session_id();
//<208d9afecdd37cc8bb2f5c870b3430c2

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;

echo '<br>'. $_SESSION['contador'];

if($_SESSION['contador'] % 5 == 0) {
    session_regenerate_id();
}
if($_SESSION['contador'] >= 15) {
    session_destroy();
}

?>