<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @yield('content')
        <form action="{{route('atualizar_livro', ['id'=>$livro->id])}}"method="post">
            @csrf
            <div><label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="{{$livro->nome}}"</div>
            <div><label for="nome">Raca</label>
                <input type="text" name="raca" id="raca" value="{{$livro->raca}}"</div>
            <div><label for="custo">Dono</label>
                <input type="text" name="dono" id="dono" value="{{$livro->dono}}"</div>
            <div><label for="preco">Peso</label>
                <input type="text" name="peso" id="peso" value="{{$livro->peso}}"</div>
            <button type="submit">Salvar</button>
        </form>
</body>
</html>
