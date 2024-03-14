<div class="titulo">Desafio Estrutura de Controle</div>

<!--
    2 trabalhos -> terça e quinta
    - Se os 2 forem executados -> TV 50' e sorvete
    - Se apenas um for executado -> TV 32' e sorvete
    - Se nenhum for executado -> Fica em casa
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<hr>

<style>
    button,select {
        font-size: 1.8rem;
    }
    button {
        margin-top: 0.8em;
        margin-bottom: 0.1em;
    }
</style>

<?php 

    if($_POST['t1'] and $_POST['t2']) {
        $tv = "TV 50'";
        $sorvete = "Sim";
        $fica_casa = "Não";
    } elseif ($_POST['t1'] xor $_POST['t2']) {
        $tv = "TV 32'";
        $sorvete = "Sim";
        $fica_casa = "Não";
    } else {
        $tv = "Não";
        $sorvete = "Não";
        $fica_casa = "Sim";
    };

    echo "TV = $tv<br>";
    echo "Sorvete = $sorvete<br>";
    echo "Ficar em casa = $fica_casa<br>";

?>