<?php
    include 'config.php';

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $edicao = $_POST['edicao'];
    $genero = $_POST['genero'];
    $localizacao = $_POST['localizacao'];               

    $idusuario = $_SESSION['idusuario'];

   $stmt = $pdo->prepare("
        INSERT INTO livro (titulo, autor, edicao, genero, localizacao, idusuario)
        VALUES (?, ?, ?, ?, ?, ?)
    ");
    $stmt -> execute([$titulo, $autor, $edicao, $genero, $localizacao, $idusuario]);

    header('location: index.php');
?>