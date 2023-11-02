@extends('site.layout')

@section('conteudo')
<div class="container">
    <h1>Editar Laboratório</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <form method="POST" action="{{ route('laboratorios.update', ['laboratorio' => $laboratorio->id]) }}">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $laboratorio->name }}">
        <button type="submit">Atualizar</button>
    </form>

    <a href="{{ route('laboratorio.show', ['laboratorio' => $laboratorio->id]) }}" class="btn btn-primary">Detalhes</a>
</div>
@endsection
