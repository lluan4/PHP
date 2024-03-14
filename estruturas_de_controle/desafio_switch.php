<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="celsius-fahrenheit">°C > °F</option>
        <option value="fahrenheit-celsius">°F > °C</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<hr>

<?php 
const C_PARA_F = 1.8;

$valor = floatval($_POST['param']) ;
$unidade = $_POST['conversao'];

switch($unidade) {
    case 'km-milha':
        $unidade = 'Km';
        $unidade_convertido = "Milha";
        $valor_convertido = $valor * 0.621371;
        break;
    case 'milha-km':
        $unidade = 'Milha';
        $unidade_convertido = "Km";
        $valor_convertido = $valor * 1.60934;
        break;
    case 'metro-km':
        $unidade = 'm';
        $unidade_convertido = "Km";
        $valor_convertido = $valor / 1e3;
        break;
    case 'km-metro':
        $unidade = 'Km';
        $unidade_convertido = "m";
        $valor_convertido = $valor * 1e3;
        break;
    case 'celsius-fahrenheit':
        $unidade = '°C';
        $unidade_convertido = "°F";
        $valor_convertido = ($valor * C_PARA_F) + 32;
        break;
    case 'fahrenheit-celsius':
        $unidade = '°F';
        $unidade_convertido = "°C";
        $valor_convertido = ($valor - 32) /C_PARA_F;
        break;
};

echo "Entrada: $valor $unidade <br>";
echo "Resultado: $valor_convertido $unidade_convertido <br>";
?>