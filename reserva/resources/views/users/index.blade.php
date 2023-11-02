@extends('site.layout')

@section('conteudo')
<div class="container">
    <h1>Lista de Usuários</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn btn-primary">Detalhes</a>
                </td>
            </tr>
            @endforeach
            <tr><a href="{{ route('users.create') }}">Novo Usuario</a></tr>
        </tbody>
    </table>
</div>
@endsection
