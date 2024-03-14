<div class="titulo">$_GET</div>

<?php 
echo $_GET;
echo "<br>";
// http://localhost/exercicio.php?dir=array&file=get&nome=Luan
print_r($_GET);
echo "<br>{$_GET['nome']}";
 ?>