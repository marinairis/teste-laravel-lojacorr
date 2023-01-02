<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado da compra</title>
</head>
<body>
    @csrf
    @dd(111)

    @if ($balance > -1)
        <p>Sobrou do seu orçamento o valor de {{ $balance }}</p>
    @else

    <button>Fazer novo calculo</button>
</body>
</html>
