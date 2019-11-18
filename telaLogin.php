<?php
    
    session_start();
?>
<?php

if (!isset($_SESSION['login_success']) ||$_SESSION['login_success'] !== true) {
    
?>

<!--FORUMLARIO DE LOGIN!-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="Css/loginCSS.css">
    <title>Login</title>
</head>
<body>
<div id="corpo-form">
    <h1>Entrar</h1>
    <form method="post" action="login.php">
        <input type="email" placeholder="Usuario" name='email' required>
        <input type="password" placeholder="Senha" name='senha' required>
        <input type="submit" value="ACESSAR" class="entrar">
    </form>
</div>
</body>
</html>

<?php

    /*CASO LOGADO INFORMAR DADOS DO LOGIN*/
    }
    else {

        header('Location: logado.php');
             
    }
?>
