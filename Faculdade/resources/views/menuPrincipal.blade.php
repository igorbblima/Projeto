<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!----Menu superior da tela principal-->
    <link rel="stylesheet" href="css/menuSuperiorTp.css">
    <!--BANNER-->
    <link rel="stylesheet" href="css/banner.css">
    <!-----Botao Pesquisa--------------------------------------------->
    <link rel="stylesheet" href="css/pesquisa.css">
    <!-----LOGOTIPO--------------------------------------------->
    <link rel="stylesheet" href="css/logo.css">
    <!-----Validacao campo pesquisa--------------------------------------------->
    <script type="text/javascript" src="js/pesquisa.js"></script>
    <!-----BOOTSTRAP--------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Menu Principal</title>

</head>

    <div class="Logout">
        <button type="button" name="logout" value="Fazer Logout">Logout</button>
    </div>

<label>Entre em Contato:
    (81)-32734-484773
</label>

<form id="formPesquisa">
    <div class="Posicao">
        <div id="Pesquisa">
            <img src="img/search.png" alt="Buscar..."/>
            <input type="text" id="campoPesquisa" name="campoPesquisa" placeholder="Buscar..."/>
            <button id="btnPesquisa" onclick="return validacao()" >Buscar</button>
        </div>
    </div>
</form>
<body>

    <div class="banner"> </div>

    <nav class="menu">
        <ul>
            <li><a href="menuPrincipal">Home</a>
                <ul>
                    <li><a href="AtualizarCadastro">Atualizar Cadastro</a></li>
                    <li><a href="cadastroProduto">Cadastrar Produto</a></li>
                </ul>
            </li>
            <li><a href="#">Serviços</a>
                <ul>
                    <li><a href="#">Listar Produtos</a></li>
                    <li><a href="https://www.receiteria.com.br/receitas-faceis/" target="_blank">Receitas</a></li>
                    <li><a href="faleConosco">Fale Conosco</a></li>
                </ul>
            </li>
            <li><a href="https://www.youtube.com/?hl=pt&gl=BR" target="_blank"> Youtube </a></li>
        </ul>
    </nav>

    <img src="/img/logomarca.png" class="logoMenuPrincipal">

    <hr>
        <!-- CADASTRA O PRODUTO E DALE -->
    <ul>
    @foreach($produtos as $todosProdutos)
    <li>Nome do Produto: {{$todosProdutos->nome_do_produto}}</li>
    <li>Preço: R${{$todosProdutos->preco}},00</li>
    <li><img src="storage/{{$todosProdutos->imagem}}" alt="imagem"></img></li>
    <li>Quantidade:{{$todosProdutos->imagem}} unidades</li>
    @endforeach
    </ul>

    <!------------>


    <!------------->







    <!--------------------------------------------------------------------------------------------------->



</body>

</html>
