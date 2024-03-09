<?php
    if($_POST){
        if (isset($_POST["login"]) && isset($_POST["senha"])) {
            header("location: ../produto/consultar.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/assets/style.global.css" />
    <link rel="stylesheet" href="/<?=explode('/', $_SERVER['REQUEST_URI'])[1]?>/screens/login/style.css" />
    <title>Login</title>
</head>
<body>
    <div class="">
        <form action="." method="POST">
            <div>
                <label>Login</label>
                <input type="text" id="login" name="login"/>
            </div>
            <div>
                <label>Senha</label>
                <input type="text" id="senha" name="senha"/>
            </div>
            <button type='submit'>Entrar</button>
        </form>
    </div>
</body>
</html>