<?php

include 'config.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirma_senha = $_POST['confirma_senha'];
$cpf = $_POST['cpf'];
    
if ($senha == $confirma_senha) {
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['cpf']);


    $ret = $pdo->query("
        insert into usuario (nome, email, senha, cpf)
        values ('$nome', '$email', '$senha', '$cpf');
    ");

header('location: acesso.php');//acesso para login
} else {
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['cpf'] = $cpf;
    header('location: acesso.php?err=0');//acesso para cadastro
}
    
?>