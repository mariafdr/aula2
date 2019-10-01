<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Boa Tarde</title>
</head>
<body>
    @if($idade)
        <h1>Boa tarde, {{ $nome }}!!! Você tem {{ $idade }} anos. Sua velha!!!</h1>  
    @else
        <h1>Boa tarde, {{ $nome }}!!! Você continua linda!!!</h1>
    @endif

    @json($tabela)

    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        @foreach ($tabela as $linha)
            <tr>
                <td>{{ $linha['nome'] }}</td>
                <td>{{ $linha['idade'] ?? 'Idade é apenas um numero...' }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>