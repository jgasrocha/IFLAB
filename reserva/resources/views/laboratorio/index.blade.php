@extends('reserva.layout')

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
                    <a href="{{ route('laboratorio.show', ['laboratorio' => $laboratorio->id]) }}" class="btn-floating btn-medium scale-transition red"><i class="medium material-icons">remove_red_eye</i></a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="1"></td>
                <td colspan="7"><a href="{{ route('laboratorios.create') }}" class="btn-floating btn-large scale-transition right"><i class="material-icons right red ">add</i></a></td></tr>
        </tbody>
    </table>
</div>
@endsection