@extends('site.layout')

@section('conteudo')

<div class="container" action="{{ route('laboratorio.index') }}">
    <h1>Lista de Laboratórios</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laboratorios as $laboratorio)
            <tr>
                <td>{{ $laboratorio->name }}</td>
                <td>
                    <a href="{{ route('laboratorio.show', ['laboratorio' => $laboratorio->id]) }}" class="btn btn-primary">Detalhes</a>
                </td>
            </tr>
            @endforeach
            <tr><a href="{{ route('laboratorios.create') }}">Novo Laboratório</a></tr>
        </tbody>
    </table>
</div>
@endsection