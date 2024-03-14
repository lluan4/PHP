<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro 
        (nome, nascimento, email, site, filhos, salario)
        VALUES (
            'Mariana da Silva',
            '1990-07-20',
            'mariana.silva@email.com',
            'https://marianasilva.com.br',
            1,
            12000
            ), (
            'João Pedro Santos',
            '1985-08-05',
            'joao.santos@email.com',
            'https://joaosantos.com.br',
            2,
            15000
            ), (
            'Ana Paula Souza',
            '1970-09-10',
            'ana.paula.souza@email.com',
            'https://anapaulasouza.com.br',
            0,
            18000
            ), (
            'Carlos Alberto Fernandes',
            '1965-10-15',
            'carlos.alberto.fernandes@email.com',
            'https://carlosalbertofernandes.com.br',
            20,
            20000
            ), (
            'Bruna Gabriela Lopes',
            '1995-11-20',
            'bruna.gabriela.lopes@email.com',
            'https://brunagllopes.com.br',
            1,
            23000
            )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso ;)";
} else {
    echo "Erro: " . $conexao->error;
}
$conexao->close();

?>