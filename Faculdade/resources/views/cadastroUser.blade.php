<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastroUser.css">
    <link rel="stylesheet" href="css/Theme-Padaria.css">
    <script type="text/javascript" src="js/cadastroUser.js"></script>
    <title>Cadastro Usuário</title>
</head>

<body class="body-general">

    <div class="div-img">
        <img src="img/logomarca.png" class="img-logo">
    </div>

    <form class="form-cadastro" id ="formUser" action="#" method="POST">

        <div class="text-initial">
            Informe seus Dados
        </div>

        <div class="divs-form-esquerda">
            <div>
                <label for="name-input" class="label">Nome</label>
            </div>
            <input type="text" name="inputN" class="input" >
        </div>

        <div class="divs-form-direita">
            <div>
                <label for="input-idade" class="label">Endereço</label>
            </div>
            <input type="text" name="inputEnd" class="input" >
        </div>

        <div class="divs-form-esquerda">
            <div>
                <label for="input-dtNasc" class="label">Data de Nascimento</label>
            </div>
            <input type="date" name="inputDN" class="input" >
        </div>

        <div class="divs-form-direita">
            <div>
                <label for="input-telefone" class="label">Telefone</label>
            </div>
            <input type="tel" name="inputT" class="input" >
        </div>

        <div class="divs-form-esquerda">
            <div>
                <label for="input-CPF" class="label">CPF</label>
            </div>
            <input type="text" name="inputCPF" class="input" >
        </div>

        <div class="divs-form-direita">
            <div>
                <label for="input-RG" class="label">RG</label>
            </div>
            <input type="text" name="inputRG" class="input" >
        </div>

        <div class="divs-form-esquerda">
            <div>
                <label for="input-Email" class="label">E-mail</label>
            </div>
            <input type="text" name="inputE" class="input" >
        </div>

        <div class="divs-form-direita">
            <div>
                <label for="input-Senha" class="label">Senha</label>
            </div>
            <input type="password" name="inputS" class="input" >
        </div>

        <div class="divs-form-direita voltar-link">
            <a type="button" name="" href="login.html" class="button-second link">Voltar</a>
        </div>

        <div class="divs-form-esquerda">
            <button type="submit" onclick="return validacao()" class="button-second">Salvar</button> 
        </div>

    </form>
</body>

</html>