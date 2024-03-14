<div class="titulo">Desafio Tabela #01</div>

<?php 
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];

echo '<table>';
foreach ($matriz as $linha ) {
    echo "<tr>";
    foreach ($linha as $valor ) {
        echo "<th>$valor</th>";
    }
    echo "</tr>";
}
echo '</table>';

echo '<hr>';

echo '<table>';
foreach ($matriz as $key => $linha) {
    if($key % 2 === 1) {
        echo "<tr impar>";
    } else {
        echo "<tr par>";
    };
    
    foreach ($linha as $valor ) {
        echo "<th>$valor </th>";
    }
    echo "</tr>";
}
echo '</table>';
?>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table th {
        border: 1px solid;
        padding: 0px 20px 0px 20px;
    }

    [impar] {
        background-color: #444;
    }

    [par] {
        background-color: lightblue;
    }
</style>