<div class="titulo">Traits #02</div>

<?php 

trait validacao {
    public function validarString($str) : bool {
        return isset($str) && $str !== '';
    }
}
trait validacaoMelhor {
    public function validarString($str)  : bool {
        return isset($str) && trim($str);
    }
}

class Usuario3 {
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadOf validacao;

        validacao::validarString as validacaoSimples;
    }
}

$usuario = new Usuario3();

var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));
?>