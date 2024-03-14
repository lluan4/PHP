<div class="titulo">Erros Personalizados</div>

<?php 
class FaixaEtariaExcepetion extends Exception {
    public function __construct($message, $code = 0,
        $previous = null) {
            echo "Erro Personalizado: $message<br>";
            parent::__construct($message, $code, $previous);
        }
}

function calcularTempoAposentadoria($idade) {
    if($idade < 18) {
        throw new FaixaEtariaExcepetion(
            'Ainda está muito longe');
    }
    if($idade > 70) {
        throw new FaixaEtariaExcepetion(
            'Já deveria estar aposentado');
    }
    return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60, 80];

foreach($idadesAvaliadas as $idade) {
    try {
       $tempoRestante = calcularTempoAposentadoria($idade);
       echo"Idade: $idade, $tempoRestante anos restantes<br>";
    } catch(FaixaEtariaExcepetion $e) {
        echo "Não foi possível calcular para $idade anos.<br>";
        echo "Motivo: {$e->getMessage()} <br>";
    }
}
?>