@extends('reserva.layout')

<div class="container">
    <h1>Criar Laboratório</h1>
<form action="{{ route('laboratorios.store') }}" method="post">
    @csrf
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name">
            <button class="btn waves-effect waves-light red" type="submit">Salvar</button>
        </form>
    </div>