@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Lista de Funcionários</h2>
        <a href="{{ route('funcionarios.create') }}" class="btn btn-primary mb-3">Novo Funcionário</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
                <th>Telefone</th>
                <th>Gênero</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($funcionarios as $funcionario)
                <tr>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->cpf }}</td>
                    <td>{{ $funcionario->data_nascimento }}</td>
                    <td>{{ $funcionario->telefone }}</td>
                    <td>{{ $funcionario->genero }}</td>
                    <td>
                        <a href="{{ route('funcionarios.edit', $funcionario) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('funcionarios.destroy', $funcionario) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
