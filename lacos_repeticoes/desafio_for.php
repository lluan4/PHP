<div class="titulo">Desafio For</div>
<!--
#
##
###
####
#####
-->

<?php 
for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= $i ; $j++) { 
        echo '#';
    };
    echo '<br>';
};

echo '<hr>';

for($impressao = '#'; $impressao !== '######'; $impressao.= '#') {
    echo $impressao, "<br>";


};
?>