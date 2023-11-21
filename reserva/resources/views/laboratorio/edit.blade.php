@extends('reserva.layout')

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
        <button class="btn waves-effect waves-light red" type="submit">Atualizar</button>
        <button class="red"><a href="{{ route('laboratorio.show', ['laboratorio' => $laboratorio->id]) }} " class="btn waves-effect waves-light red" style="color: white">Voltar</a></button>
    </form>

    
</div>

