<?php
// require 'config.php';
//PAGINA DE CADASTRO
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
        <form method="POST" action="<?=$base;?>/signup_action.php">
            <?php if(!empty($_SESSION['flash'])):?>
                <?=$_SESSION['flash'];?>
                <?php $_SESSION['flash'] = '';?>
            <?php endif;?>

            <input placeholder="Digite seu Nome Completo " class="input" type="text" name="name" />

            <input placeholder="Digite seu E-mail" class="input" type="email" name="email" />

            <input placeholder="Digite sua Senha" class="input" type="password" name="password" />

            <input placeholder="Digite sua Data de Nascimento" class="input" type="text" name="birthdate" id="birthdate"/>

            <input class="button" type="submit" value="Fazer cadastro " />

            <a href="login.php">Já tem conta? Faça o login</a>
        </form>
    </section>
<!--VALIDAÇÃO DE DATA NO FORMATO BR-->
    <script src="https://unpkg.com/imask"></script>
    <script>
    IMask(
        document.getElementById("birthdate"),
        {mask:'00/00/0000'}
    );
    </script>
</body>
</html>