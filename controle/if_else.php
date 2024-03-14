<div class="titulo">If Else</div>

<?php 

if(true) {
    echo 'Verdadeiro - Parte A';
} else {
    echo 'Falso';
};

echo '<br>';

if(false) {
    echo 'Verdadeiro';
} else {
    echo 'Falso - Parte B';
};

echo '<br>';

if(false) {
    echo 'Passo A <br>';

} else if(true) {
    echo 'Passo B <br>';

} else {
    echo 'Último Passo<br>';
};

?>