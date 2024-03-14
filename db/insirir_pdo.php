<div class="titulo">PDO: Inserir</div>

<?php 
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
(nome, email, nascimento, site, filhos, salario)
VALUES 
    ('João da Silva', 'joao@silva.com', '1990-01-01', 'joao.silva.com', 2, 5000),
    ('Maria da Silva', 'maria@silva.com', '1991-02-02', 'maria.silva.com', 1, 4000),
    ('Pedro da Silva', 'pedro@silva.com', '1992-03-03', 'pedro.silva.com', 0, 3000),
    ('Ana da Silva', 'ana@silva.com', '1993-04-04', 'ana.silva.com', 3, 2000),
    ('Carlos da Silva', 'carlos@silva.com', '1994-05-05', 'carlos.silva.com', 4, 1000),
    ('José da Silva', 'jose@silva.com', '1995-06-06', 'jose.silva.com', 5, 0),
    ('Luís da Silva', 'luis@silva.com', '1996-07-07', 'luis.silva.com', 6, -1000),
    ('Pedro da Silva', 'pedro@silva.com', '1997-08-08', 'pedro.silva.com', 7, -2000),
    ('João da Silva', 'joao@silva.com', '1998-09-09', 'joao.silva.com', 8, -3000)";

$conexao = novaConexao();
//print_r(get_class_methods($conexao));

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}
$conexao->close();
?>