<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
        <form action="{{route('atualizar_pet', ['id'=>$pet->id])}}"method="post">
            @csrf
            <div class="row">
                <div class="col">
            <div><label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="{{$pet->nome}}"</div>
            </div>
                </div>

                <div class="row">
                    <div class="col">
            <div><label for="nome">Raca</label>
                <input type="text" name="raca" id="raca" value="{{$pet->raca}}"</div>
            </div>
                    </div>

                    <div class="row">
                        <div class="col">
            <div><label for="custo">Dono</label>
                <input type="text" name="dono" id="dono" value="{{$pet->dono}}"</div>
            </div>
                        </div>

                        <div class="row">
                            <div class="col">
            <div><label for="preco">Peso</label>
                <input type="text" name="peso" id="peso" value="{{$pet->peso}}"</div>
            </div>
                            </div>
            <button type="submit">Salvar</button>
        </form>
</body>
</html>


