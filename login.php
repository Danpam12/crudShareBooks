<?php
    include 'config.php';

    $usuarionome = $_POST['usuario'];
    $senha = $_POST['senha'];
    

    $ret = $pdo->query('select * from usuario');
    $usuario = $ret->fetchAll();
    


    foreach($usuario as $usuario) {
        if ($usuarionome == $usuario['nome'] && $senha == $usuario['senha']) {
            $_SESSION['usuarionome'] = $usuario['email'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['idusuario'] = $usuario['idusuario'];
            $_SESSION['cod_registro'] = $usuario['cod_registro'];
        }
    }

    header('location: home.php');
?>