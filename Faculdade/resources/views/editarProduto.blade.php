<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Editar Produto</title>
</head>
<body>

    <div class="container">
    <form class="form-group" action="/produto" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome_do_produto" id="nome" value="{{old('nome_do_produto')}}">
            <div>
            <span class="alert-danger">{{$errors->first('nome_do_produto')}}</span>
        </div>


        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="file" class="form-control-file" name="imagem" id="imagem" value="{{old('imagem')}}">
            <div>
            <span class="alert-danger">{{$errors->first('imagem')}}</span>
            </div>
        </div>


        <div class="form-group">
            <label for="nome">Preço</label>
        <input type="number"class="form-control" name="preco" id="preco" value="{{old('preco')}}">
        <div>
        <span class="alert-danger">{{$errors->first('preco')}}</span>
        </div>
        </div>

    <div class="form-group">
        <label for="quantidade">Quantidade de Produto</label>
         <input type="number" class="form-control" name="quantidade" id="quantidade" value="{{old('quantidade')}}">
         <div>
        <span class="alert-danger">{{$errors->first('quantidade')}}</span>
         </div>
    </div>
            <button  class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
</div>
</body>
</html>

