<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/Theme-Padaria.css">
    <script type="text/javascript" src="js/login.js"></script>
    <title>Login</title>
</head>

    <body>

        <body class="body-general">

        <form class="form-login"  id="formUser" action="#" method="POST">

        <img src="img/logomarca.png" class="img-logo">

        <div>
            <label class="text-login">Faça o login para entrar</label>
        </div>

        <div>
            <input type="email" name="email" class="input email" placeholder="E-mail">
        </div>

        <div>
            <input type="text" class="input senha"  name="password" placeholder="Senha" >
        </div>

        <div>
            <input type="submit" onclick="return validacao()" class= "button login" value="Login">
        </div>

        <div>
            <a href="cadastroUser" class="cadastrar">Cadastre-se</a>
        </div>

    </form>
    </body>
</html>


