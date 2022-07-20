<?php
    include 'config.php';

    $data = [];

    $ret = $pdo->query('select * from livro');
    $data = $ret->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style_html.css">
    <title>Livros</title>
</head>
<header>
<div class="nav-bar">
    <ul>
        <li><a class="active" href="/index.php">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="sobre.php">About</a></li>
        <li><a href="/logout.php">Sair</a></li>
    </ul>
</div>
       <div class="center">
            <div class="logo">
                <img src="/assets/logo.png">
            </div>


</header>
<body>
    <section class="sobre">
            <div class="estante"> 
                    <h1>Livros de <?= $_SESSION['nome'] ?></h1>
            </div>

        <div class="perfil-tab">
            <form action="update.php?linha=<?= $row['idlivro'] ?>" method="POST">
                <fieldset>
                    <legend>Editar Livros</legend>
                    <input type="text" name="titulo" placeholder="Título">
                    <input type="text" name="autor" placeholder="Autor">
                    <input type="text" name="edicao" placeholder="Edição">
                    <input type="text" name="genero" placeholder="Gênero">
                    <input type="text" name="localizacao" placeholder="Localização">
                    <input type="submit" value="editar">
                    <a href="index.php" class="button">Voltar</a>
                </fieldset>
            </form>
            <table>
                <tr>
                    <th>id</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Edição</th>
                    <th>Gênero</th>
                    <th>Localização</th>
                </tr>
                <?php foreach ($data as $i => $row): ?>
                    <?php if ($row['idusuario'] == $_SESSION['idusuario']): ?>
                        <tr>
                            <td><?= $row['idlivro'] ?></td>
                            <td><?= $row['titulo'] ?></td>
                            <td><?= $row['autor'] ?></td>
                            <td><?= $row['edicao'] ?></td>
                            <td><?= $row['genero'] ?></td>
                            <td><?= $row['localizacao'] ?></td>
                            
                        </tr>
                    <?php endif ?>
                <?php endforeach ?>
            </table>
         </div>
</div>
</body>
</html>