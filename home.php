<?php
    session_start();
    if (!isset($_SESSION['nome'])) {
        header('location: index.php?err=0');
        exit();
    }
    header('location: livros/');
?>