<?php
    session_start();

    $dsn = 'mysql:dbname=livros_BD;port=3306';
    $pdo = new PDO($dsn, 'root', 'root'); 
?>