@extends('app')

@section('title','Detalhe do cliente')

@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Detalhes do cliente {{ $client->nome }}</h5>
            <div class="card-body">
              <p><strong>ID:</strong> {{ $client->id }}</p>
              <p><strong>Nome:</strong> {{ $client->nome }}</p>
              <p><strong>Endereço:</strong> {{ $client->endereco }}</p>
              <p><strong>Observação:</strong> {{ $client->observacao }}</p>
            <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar</a>
            </div>
        </div>
    </div>
@endsection
