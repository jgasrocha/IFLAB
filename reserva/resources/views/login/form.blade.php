@if ($mensagem = Session::get('erro'))
    {{ $mensagem }}
@endif

<form action="{{ route('login.auth') }}" method="POST"> 
    @csrf

    Email: <br> <input type="email" name="email"> <br>
    Senha: <br> <input type="password" name="password"> <br>
    <button type="submit" class="btn btn-outline-success">Entrar</button>
</form>
