<div class="titulo">Desafio Data</div>

<?php  
class Data
{
    public $dia = 01;
    public $mes = 1;
    public $ano = 1950;

    public function apresentar() : string {
        return "{$this->dia}/{$this->mes}/{$this->ano}<br>";
    }
}

$data1 = new Data;
echo $data1->apresentar();

?>