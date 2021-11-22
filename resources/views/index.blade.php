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
    <h1>Home</h1>

    @foreach ($info_escolas as $info_escola)
    
    <h2>Acessar Escola = {{ $info_escola->nome }}<h2>
    <form method = 'post' action ="{{route('acessar', $info_escola->nome)}}">
    {{ csrf_field() }}

    <button type ='submit' name = 'acesar'>acessar</button>
    </form>

    @endforeach
    
</body>
</html>