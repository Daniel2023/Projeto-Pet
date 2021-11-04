<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width,initial-scale=1">
        <title> Cadastrar novo Pet</title>
        <style>
            label{
                float: left;
                display: block;
                width: 90px;
            }
        </style>
    </head>
    <body>
        <form action="{{ route('salvar_pet') }}" method="post">
            @csrf
            <div><label for="nome">Nome</label><input type="text" name="nome" id="nome"></div>
            <div><label for="raca">Raca</label><input type="text" name="raca" id="raca"></div>
            <div><label for="dono">Dono</label><input type="text" name="dono" id="dono"></div>
            <div><label for="peso">Peso</label><input type="text" name="peso" id="peso"></div>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>
