@extends('reserva.layout')
@section('conteudo')

<nav class="red nav">
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo center">IFLab</a>

        <ul id="nav-mobile" class="left">
            @if(auth()->user()->is_admin)
                <li><a href="{{ route('laboratorio.index') }}">Labs</a></li>
                <li><a href="{{ route('users.index') }}">Usuários</a></li>
            @endif
        </ul>

        <ul id="nav-mobile" class="right">
            <li>
                <a href="#" class="dropdown-trigger" data-target="dropdown1">
                    Olá, {{ auth()->user()->name }}<i class="material-icons right">expand_more</i>
                </a>
                <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="{{ route('users.show', ['user' => auth()->user()->id]) }}" style="color: red"><i class="medium material-icons">perm_identity</i></a></li>
                    <li><a href="{{ route('login.form') }}" style="color: red"><i class="medium material-icons">exit_to_app</i></a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems, { coverTrigger: false });
        });
</script>

<div class="container">
    <h3>Reservas</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome do Laboratório</th>
                <th>Nome do Professor</th>
                <th>Data de Início</th>
                <th>Data de Término</th>
                <th>Detalhes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
            <tr>
                <td>{{ optional($reserva->laboratorio)->name }}</td>
                <td>{{ optional($reserva->user)->name }}</td>
                <td>{{ \Carbon\Carbon::parse($reserva->data_inicio)->format('d/m/Y H:i') }}</td>
                <td>{{ \Carbon\Carbon::parse($reserva->duracao)->format('d/m/Y H:i') }}</td>
                <td>
                    <a href="{{ route('reservas.show', ['reserva' => $reserva->id]) }}" class="btn-floating btn-medium scale-transition red">
                        <i class="medium material-icons">remove_red_eye</i>
                    </a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="7"><a href="{{ route('reserva.create') }}" class="btn-floating btn-large scale-transition right"><i class="material-icons right red ">add</i></a></td>
            </tr>
        </tbody>
    </table>

    <div class="pagina">
        {{ $reservas->links('custom.pagination')}}
    </div>
</div>

@endsection
