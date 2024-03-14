<style>
    label {
        font-size: 1.5rem;
        margin-bottom: 0px;
        padding: 0px;
    }
    input[type=text] {
        margin: 0px;
    }
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        border: 1px solid;
        padding: 0px 20px 0px 20px;
    }
</style>

<div class="titulo">Desafio Tabela #02</div>

<form action="#" method="post">
    <div>
        <label for="linhas">linhas x colunas: </label>
        <input type="text" name="linhas"><br>
    </div>
    
    <button>Enviar</button>
</form>

<table>
    <?php 
    $num = 1;
    $tabela = explode('x', $_POST['linhas']);
    list($linhas, $colunas) = $tabela;

    for ($i=1; $i <= $linhas; $i++) { 
        echo '<tr>';
        for ($j=1; $j <= $colunas; $j++) { 
            echo"<td>$num</td>";
            $num++;
        }
        echo '</tr>';
    }

    ?> 
</table>








