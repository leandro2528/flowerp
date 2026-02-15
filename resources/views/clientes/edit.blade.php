@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-warning text-dark">
        <h3>Editar Cliente</h3>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" value="{{ old('nome', $cliente->nome) }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', $cliente->email) }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>Telefone</label>
                <input type="text" name="telefone" value="{{ old('telefone', $cliente->telefone) }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>Empresa</label>
                <input type="text" name="empresa" value="{{ old('empresa', $cliente->empresa) }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Atualizar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</div>
@endsection
