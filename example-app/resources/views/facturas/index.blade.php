@extends('layouts.main')
@section('Titlo ','Mostra Cliente')
@section('content')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Faturas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Lista de Faturas</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cliente</th>
                <th scope="col">Itens Faturados</th>
                <th scope="col">Data de Emissão</th>
                <th scope="col">Data de Vencimento</th>
                <th scope="col">Valor Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faturas as $fatura)
            <tr>
                <td>{{ $fatura->id }}</td>
                <td>{{ $fatura->cliente->nome }}</td>
                <td>{{ $fatura->itens_faturados }}</td>
                <td>{{ $fatura->data_emissao }}</td>
                <td>{{ $fatura->data_vencimento }}</td>
                <td>{{ $fatura->valor_total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<
</body>
</html>

@endsection