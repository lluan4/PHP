<div class="titulo">Argumentos por Padrão</div>

<?php 
function saudacao($nome ="Senhor(a)", $sobrenome = "Cliente") : void {
    echo "Bem vindo {$nome} $sobrenome <br>";
}

function anotarPedido($comida , $bebida = "Água") : void {
    echo "Para comer: {$comida} <br>";
    echo "Para beber: {$bebida} <br>";
}

echo saudacao();
echo saudacao(null);
echo saudacao(null,null);
echo saudacao("mestre","Supremo");
echo anotarPedido("mestre");


 ?>