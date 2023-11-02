@extends('site.layout')

@section('conteudo')
<div class="container">
    <h1>Editar Usuário</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}">
        <button type="submit">Atualizar</button>
    </form>

    <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn btn-primary">Detalhes</a>
</div>
@endsection
