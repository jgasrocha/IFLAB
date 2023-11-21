@extends('reserva.layout')
@section('conteudo')

<form class="outer-form" method="POST" action="{{ route('reservas.store') }}">
    @csrf

    <div class="reserva outer-box">
        <h1>Criar Reserva</h1>
        
        <form class="inner-form">
            <div class="form-group">
                <label for="laboratorio_id">Laboratórios:</label>
                <select name="laboratorio_id" id="laboratorio_id" class="form-control">
                    @foreach ($laboratorios as $laboratorio)
                        <option value="{{ $laboratorio->id }}" {{ old('laboratorio_id') == $laboratorio->id ? 'selected' : '' }}>
                            {{ $laboratorio->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="data_inicio">Data e Hora de Início:</label>
                <input type="datetime-local" name="data_inicio" id="data_inicio" value="{{ old('data_inicio') }}">
            </div>
            
            <div class="form-group">
                <label for="data_fim">Data e Hora de Término:</label>
                <input type="datetime-local" name="duracao" id="duracao" value="{{ old('duracao') }}">
            </div>
            
            <button class="btn waves-effect waves-light red" type="submit">Submeter</button>
        </form>
    </div>
</form>











{{--
<form class="cubo">
<form class="reserva" method="POST" action="{{ route('reservas.store') }}">
    @csrf
    <div class="form-group">
        <h1>Criar Reserva</h1>
        <label for="laboratorio_id">Laboratórios:</label>
        <select name="laboratorio_id" id="laboratorio_id" class="form-control">
            @foreach ($laboratorios as $laboratorio)
                <option value="{{ $laboratorio->id }}" {{ old('laboratorio_id') == $laboratorio->id ? 'selected' : '' }}>
                    {{ $laboratorio->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="data_inicio">Data e Hora de Início:</label>
        <input type="datetime-local" name="data_inicio" id="data_inicio" value="{{ old('data_inicio') }}">
    </div>
    <div class="form-group">
        <label for="data_fim">Data e Hora de Término:</label>
        <input type="datetime-local" name="duracao" id="duracao" value="{{ old('duracao') }}">
    </div>
    <button class="btn waves-effect waves-light" type="submit">Submeter</button>
</form>
</form>--}}
@endsection