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
    <link rel="stylesheet" href="style_html.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="nav-bar">
            <ul>
            <li><a class="active" href="index.php">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="sobre.php">About</a></li>
            </ul>
        </div>
       <div class="center">
            <div class="logo"><img src="assets/logo.png">
            </div>
            <div class="menu">
                
                <form action="login.php" method="POST">
                <h4>Sign-in</h4>
                
                    <input type="text" name="usuario" placeholder="Nome">
                    <input type="senha" name="senha" placeholder="senha">
                    <input type="submit">
                </form>
                <a href="acesso.php">Clique aqui para registrar-se</a>
                <?php if (($_GET['err'] ?? $_GET['erro'] ?? -1) == '0'): ?>
                    <p>Usuário não autenticado</p>
                <?php endif ?>
            </div>
       </div>
            
</header>
    <section class="sobre">
        <div class="extras">
            <img src="assets/leitora.svg" class="extras-image" alt="leitor">
            <div class="social-media">
                <a href="https://www.facebook.com/"><img src="assets/facebook.png"></a>
                <a href="https://www.instagram.com/"><img src="assets/instagram.png"></a>
                <a href="https://twitter.com/"><img src="assets/twitter.png"></a>
            </div>
         </div>
        <div class="estante">
            <h2>Livros na estante</h2>
        </div>
        <div>
            <h5> aa</h5>
    </div>
            <div class="tabela-livros">
                <table>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Edição</th>
                        <th>Gênero</th>
                        <th>Localização</th>
                        <th>Ação</th>
                        
                    </tr>
                    <?php foreach ($data as $i => $row): ?>
                        <tr>
                            <td><?= $row['titulo'] ?></td>
                            <td><?= $row['autor'] ?></td>
                            <td><?= $row['edicao'] ?></td>
                            <td><?= $row['genero'] ?></td>
                            <td><?= $row['localizacao'] ?></td>
                            <td>
                                <a href="acesso.php">contato</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
    </section>
</body>
</html>