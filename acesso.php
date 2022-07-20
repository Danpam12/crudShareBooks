<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_html.css">
    <title>Login</title>
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
            
</header>
     <!---------------------TELA DE LOGIN------------------------------------->
    <div class="main-login">
        <div class="left-login">
             <h1>Faça login<br>E entre para nossa turma</h1>
             <img src="assets/leitor.svg" class="left-login-image" alt="leitor animação">
        </div>
    </div>
<div class="login-wrap">
    <div class="form-tab">
        
            <form action="cadastro.php" method="POST">
            <p>Sign Up</p>

<!---------------------TELA DE CADASTRO------------------------------------->
   <?php if (isset($_GET['err']) && $_GET['err'] == '0'): ?>
       <h3>As senhas não conferem</h3>
       <?php endif ?>
                <div>
                    <input type="text" name="nome" placeholder="nome" value="<?= $_SESSION['nome'] ?? '' ?>">
                    <input type="email" name="email" placeholder="email"  value="<?= $_SESSION['email'] ?? '' ?>">
                </div>
                <div>
                    <input type="senha" name="senha" placeholder="senha">
                    <input type="senha" name="confirma_senha" placeholder="confirma senha">
                </div>
                <div>
                    <input type="text" name="cpf" placeholder="cpf" value="<?= $_SESSION['cpf'] ?? '' ?>">
                </div>
                <input type="submit">
                <a href="index.php" class="button">Login</a> 
            </form>
    </div>
        
</div>  
</body>
</html>