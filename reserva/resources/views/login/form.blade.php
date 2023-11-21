@extends('login.layout')
<div class="form-container">
    @if ($mensagem = Session::get('erro'))
        <script>
            alert("{{ $mensagem }}")
        </script>
    @endif

    <form action="{{ route('login.auth') }}" method="POST"> 
        @csrf
        <h4>IFLab</h4>
        Email: <br> <input type="email" name="email"> <br>
        Senha: <br> <input type="password" name="password"> <br>
        <button type="submit" id="btn" class="btn btn-outline-success red">Entrar</button>
    </form>
</div>
