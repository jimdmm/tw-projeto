@extends('app')

@section('title', 'Editar Cliente')

@section('content')
   <div class="container">
        <h1>Editar Cliente</h1>

        <form action="{{ route('clients.update', $client) }}" method="post">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" value="{{ $client->nome }}" class="form-control" id="nome" name="nome" aria-describedby="nome" placeholder="Digite seu nome">
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" value="{{ $client->endereco }}" class="form-control" id="endereco" name="endereco" aria-describedby="endereco" placeholder="Digite o seu endereço">
            </div>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observação</label>
                <textarea class="form-control" id="observacao" name="observacao" aria-describedby="observacao" placeholder="Digite a sua observação">{{ $client->observacao }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Editar</button>    
        </form>
    </div>
@endsection
    