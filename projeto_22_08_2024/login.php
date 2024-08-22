<?php
// require 'config.php';
//PAGINA DE LOGIN
?>
<!DOCTYPE html>
<html>
<head>
    <!--PARTE DAS LACUNAS QUE RECEBEM OS DADOS-->
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="css/login.css" />
</head>
<body>
    <header>
        <div class="container">
            <a href="<?=$base;?>"><img src="assets/img/logo1.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="login_action.php">
            <?php if(!empty($_SESSION['flash'])):?>
                <?=$_SESSION['flash'];?>
                <?php $_SESSION['flash'] = '';?>
            <?php endif;?>
            <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

            <input placeholder="Digite sua senha" class="input" type="password" name="password" />

            <input class="button" type="submit" value="Acessar o sistema" />

            <a href="signup.php">Ainda não tem conta? Cadastre-se</a>
        </form>
    </section>
</body>
</html>