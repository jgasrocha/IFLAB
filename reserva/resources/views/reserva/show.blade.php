@extends('site.layout')

@section('conteudo')
<div class="container">
    <h1>Detalhes da Reserva</h1>

    @if (auth()->check())
        <table class="table">
            <tr>
                <th>ID da Reserva:</th>
                <td>{{ $reserva->id }}</td>
            </tr>
            <tr>
                <th>Nome do Laboratório:</th>
                <td>{{ optional($reserva->laboratorio)->name }}</td>
            </tr>
            <tr>
                <th>Nome do Usuário:</th>
                <td>{{ optional($reserva->user)->name }}</td>
            </tr>
            <tr>
                <th>Email do Usuário:</th>
                <td>{{ optional($reserva->user)->email }}</td>
            </tr>
            <tr>
                <th>Data e Hora de Início:</th>
                <td>{{ \Carbon\Carbon::parse($reserva->data_inicio)->format('d/m/Y H:i') }}</td>
            </tr>
            <tr>
                <th>Data e Hora de Término:</th>
                <td>{{ \Carbon\Carbon::parse($reserva->duracao)->format('d/m/Y H:i') }}</td>
            </tr>
        </table>

        @if (auth()->user()->id == $reserva->user_id || auth()->user()->isAdmin())
            @if ($mensagem = Session::get('erro'))
                <script>
                    alert("{{$mensagem}}")
                </script>
            @endif

            <form action="{{ route('reservas.destroy', ['reserva' => $reserva->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger red">Excluir Reserva</button>
            </form>
        @else
            <p>Você não tem permissão para excluir esta reserva.</p>
        @endif
    @else
        <p>Você não está autenticado. Faça login para ver os detalhes da reserva.</p>
    @endif
</div>
@endsection
