@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h3>Adicionar Cliente</h3>
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

        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" value="{{ old('nome') }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>Telefone</label>
                <input type="text" name="telefone" value="{{ old('telefone') }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>Empresa</label>
                <input type="text" name="empresa" value="{{ old('empresa') }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</div>
@endsection
