<div class="titulo">Sessão</div>

<?php 
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Luan';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'luan.lima@email.com';
}
print_r($_SESSION);
echo '<br>';
 ?>

 <p>
    <a href="/sessao_cookie/basico_sessao_alterar.php">
    Alterar Sessão
    </a>
 </p>