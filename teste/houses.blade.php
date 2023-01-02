<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo compra das casas</title>
</head>
<body>
    <form action="{{route('result')}}" method="GET">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="">Valor casa 1:</label> <br/>
        <input type="value" name="house_1"> <br/>

        <label for="">Valor casa 2:</label> <br/>
        <input type="value" name="house_2"> <br/>

        <label for="">Valor casa 3:</label> <br/>
        <input type="value" name="house_3"> <br/>

        <label for="">Orçamento:</label> <br/>
        <input type="value" name="orcamento"> <br/>

        <button>Salvar</button>
    </form>
</body>
</html>
