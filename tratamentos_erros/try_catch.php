<div class="titulo">Try & catch</div>

<?php 

// echo 7/0;
// echo intdiv(7,0);

try {
    echo intdiv(7,0);
} catch(Error $e) {
    echo 'Teve um erro aqui 1<br>';
}

try {
    echo intdiv(7, 0);
    throw new Exception('Um erro muito estranho');
} catch(DivisionByZeroError $e) {
    echo 'Divisão por 0<br>' ;
} catch(Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executado!<br>';
}

echo 'Continua<br>';

?>