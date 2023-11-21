@extends('site.layout') 

@section('conteudo')
    <div class="container">
        <h1>Criar Usuário</h1>
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
            <button class="btn waves-effect waves-light red" type="submit">Salvar</button>
        </form>
    </div>
@endsection