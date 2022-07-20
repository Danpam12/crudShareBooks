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
    <title>Livros disponíveis</title>
    
</head>
<body>
<header>
<div class="nav-bar">
    <ul>
        <li><a class="active" href="/index.php">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="/sobre.php">About</a></li>
        <li><a href="/logout.php">Sair</a></li>
    </ul>
</div>
       <div class="center">
            <div class="logo"><img src="/assets/logo.png"></div>
       </div>
</header>
    <section class="sobre">
        <div class="estante"> 
                <h1>Livros de <?= $_SESSION['nome'] ?></h1>
        </div>
        <div class="perfil-tab">
            <div class="novo-livro">
                <form action="add-livros.php" method="POST">
                    <fieldset class="novo-livro">
                        <legend>Novo Livro</legend>
                        <input type="text" name="titulo" placeholder="Título">
                        <input type="text" name="autor" placeholder="Autor">
                        <input type="text" name="edicao" placeholder="Edição">
                        <input type="text" name="genero" placeholder="Gênero">
                        <input type="text" name="localizacao" placeholder="Localização">
                        <input type="submit" value="adicionar">
                    </fieldset>
                </form>
            </div>
                <table>
                    <tr>
                        <th>id</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Edição</th>
                        <th>Gênero</th>
                        <th>localização</th>
                        <th colspan="2">Ações</th> 
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
                                <td>
                                    <a href="editar.php?linha=<?= $row['idlivro']?>">editar</a>
                                </td>
                                <td>
                                    <a href="delete.php?linha=<?= $row['idlivro'] ?>">remover</a>
                                </td>
                            </tr>
                        <?php endif ?>
                    <?php endforeach ?>
                </table>
        </div>
    </section>
</body>
</html>