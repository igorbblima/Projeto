<!doctype html>
<html lang="pt-br">
  <head>
    <title>

    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/menuSuperiorTp.css">
    <link rel="stylesheet" href="css/logo.css">
    <link rel="stylesheet" href="css/listagemProduto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <nav class="menu">
        <ul>
            <li>
                <a href="menuPrincipal.html">Home</a>
            </li>
            <li><a href="AtualizarCadastro.html">Atualizar Dados</a></li>
            <li><a href="#">Sobre Nós</a></li>
            <li><a href="https://www.receiteria.com.br/receitas-faceis/" target="_blank">Receitas</a></li>
            <li><a href="https://www.youtube.com/?hl=pt&gl=BR" target="_blank"> Youtube </a></li>
        </ul>
    </nav>

    <div class="banner"> </div>

        <img src="/img/logomarca.png" class="listagemProdutoR">
        <img src="/img/logomarca.png" class="listagemProdutoL">
        <a  id="LastPage"href="#">Próxima Página</a>

         <div id="listagemProduto">
             <div class="listagemProduto">
                                <h1>Nome do Produto: {{$produto->nome_do_produto}}   </h1>
                                <p>Quantididade:        </p>
                                <h2>Preço  R$:          </h2>
                            </div>
    </div>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
