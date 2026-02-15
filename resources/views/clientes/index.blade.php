@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Clientes</h2>
    <a href="{{ route('clientes.create') }}" class="btn btn-success">Adicionar Cliente</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Empresa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $c)
                <tr>
                    <td>{{ $c->nome }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->telefone }}</td>
                    <td>{{ $c->empresa }}</td>
                    <td>
                        <a href="{{ route('clientes.edit', $c->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('clientes.destroy', $c->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @if(count($clientes) == 0)
                <tr>
                    <td colspan="5" class="text-center">Nenhum cliente cadastrado.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
