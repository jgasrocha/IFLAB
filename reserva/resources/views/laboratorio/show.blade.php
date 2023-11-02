@extends('site.layout')

@section('conteudo')
<div class="container">
    <h1>Detalhes do Laboratório</h1>
    <p><strong>Nome:</strong> {{ $laboratorio->name }}</p>
    
    <p>
        <a href="{{ route('laboratorios.edit', ['laboratorio' => $laboratorio->id]) }}" class="btn btn-primary">Editar Laboratório</a>
    </p>    
    <form action="{{ route('laboratorios.destroy', ['laboratorio' => $laboratorio->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir Laboratório</button>
    </form>
</div>
@endsection
