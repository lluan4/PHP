<?php  
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome']?>
    <br>
    <b>Email: </b> <?= $_SESSION['email']?>
</p>

<?php 
     $_SESSION['email'] = 'lluan.lima_alterado@email.com.br'
?>

<p>
    <a href="sessao.php">Voltar</a>
</p>

<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>