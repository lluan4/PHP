<div class="titulo">PDO: Deletar</div>

<?php 
require_once "conexao_pdo.php";
$conexao = novaConexao();


$sql = "DELETE FROM cadastro WHERE id =:id";
$stmt = $conexao->prepare($sql);

if($stmt->execute([':id' => 14])) {
    echo "ID Apagado";
} else {
    echo $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao->close();
 ?>