<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadastrarProduto</title>
</head>
<body>
    <form class="form" action="/produto" method="POST" enctype="multipart/form-data">
            @csrf
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome_do_produto"id="nome">
        </div>


        <div>
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" id="imagem">
        </div>


        <div>
            <label for="nome">Preço</label>
            <input type="number" name="preco" id="preco">
        </div>

    <div>
        <label for="quantidade">Quantidade de Produto</label>
         <input type="number" name="quantidade" id="quantidade">
    </div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>

