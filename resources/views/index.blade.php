<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='/css/main.css' rel='stylesheet'>
    <title>HOME</title>
</head>
<body>
    
    <div class = 'container-main-index'>
        <h1 class = 'titulo-index'>Home</h1>
        @foreach ($info_escolas as $info_escola)
        
        <div class = container-conteudo-index>

            <h2 class = 'subtitulo-index'>{{ $info_escola->nome }}<h2>
            <form method = 'post' action ="{{route('acessar', $info_escola->codigo)}}">
            {{ csrf_field() }}
            <p>Acessar Escola</p>
            <button type ='submit' name = 'acesar' class = 'botao-index'>Acessar</button>
            </form>
        
        </div>
        @endforeach
    </div>
</body>
</html>