<div class="titulo">Ler & Arquivo</div>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<?php  
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo "<br>";
echo fread($arquivo, 10);
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize("teste.txt");
echo $tamanho, '<br>';
echo fread($arquivo, filesize("teste.txt"));
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo));
echo '<br>';
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
};
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo);
};
echo "<br>";
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo,"\nAdicionado durante a leitura\n");
fclose($arquivo);

echo "<hr>";
?>