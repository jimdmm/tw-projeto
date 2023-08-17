@extends('app')

@section('title', 'Novo Cliente')

@section('content')
   <div class="container">
        <h1>Novo Cliente</h1>
        
        <form action="{{ route('clients.store') }}" method="post">
        @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" aria-describedby="endereco" placeholder="Digite o seu endereço" required>
            </div>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observação</label>
                <textarea class="form-control" id="observacao" name="observacao" aria-describedby="observacao" placeholder="Digite a sua observação"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>    
        </form>
    </div>
@endsection
    