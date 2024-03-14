<?php 

date_default_timezone_set('America/Sao_Paulo');
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );

// Pastas
define("MODEL_PATH", realpath(dirname(__FILE__) . '/../models'));

require_once(realpath(dirname(__FILE__) . '/database.php'));
?>