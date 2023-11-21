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
                    <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn-floating btn-medium scale-transition red">
                        <i class="medium material-icons">remove_red_eye</i> </a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="5"></td>
                <td colspan="7"><a href="{{ route('users.create') }} " class="btn-floating btn-large scale-transition right"><i class="material-icons right red ">add</i></a></td>
            </tr>
            </tbody>
    </table>
</div>
@endsection
