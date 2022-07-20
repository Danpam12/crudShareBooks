<?php
    include 'config.php';  
    $linha = $_GET['linha'];

    $stmt = $pdo->prepare("DELETE FROM livro WHERE idlivro = ?");
    $stmt ->execute([$linha]);

    header('location: index.php');
?>