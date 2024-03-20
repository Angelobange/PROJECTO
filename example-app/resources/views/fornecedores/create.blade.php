@extends('layouts.main')
@section('Titlo ','Criar Cliente')
@section('content')

<h1>  Area do cliente </h1>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lista de Clientes</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Sistema de Faturação</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clientes.index') }}">Lista de Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('clientes.createe')}}">Adicionar Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="fornecedores.index">Lista de Fornecedores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Lista de Faturas</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5">
   
    
       

    </table>
</div>



</body>
</html>
@endsection