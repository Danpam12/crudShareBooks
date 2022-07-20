<?php
    $dsn = 'mysql:dbname=remedio_BD;port=3307';

    $pdo = new PDO($dsn, 'root', 'root'); 

    $ret = $pdo->query('select * from usuario');
    $users = $ret->fetchAll();

    
?>