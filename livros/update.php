<?php
    include 'config.php';

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $edicao = $_POST['edicao'];
    $genero = $_POST['genero'];
    $localizacao = $_POST['localizacao'];
    

    $idlivro = $_GET['linha'];

   $stmt = $pdo->prepare("
        UPDATE livro SET titulo=?, autor=?, edicao=?, genero=?, localizacao=? WHERE idlivro=?
    ");
    $stmt -> execute([$titulo, $autor, $edicao, $genero, $localizacao, $idlivro]);

    header('location: index.php');
?>

