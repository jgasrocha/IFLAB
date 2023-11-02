@extends('site.layout')

@section('conteudo')
<div class="container">
    <h1>Detalhes do Usuário</h1>
    <p><strong>Nome:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    
    <p>
        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary">Editar Usuário</a>
    </p>    
    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir Usuário</button>
    </form>
</div>
@endsection
