@extends('site.layout')

@section('conteudo')

<nav class="green">
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo center">IFLab</a>

        <ul id="nav-mobile" class="left">
            <li><a href="{{ route('laboratorio.index') }}">Labs</a></li>
            <li><a href="{{ route('reservas.home') }}">Reservas</a></li>
        </ul>

        <ul id="nav-mobile" class="right">
            <li>
                <a href="#" class="dropdown-trigger" data-target="dropdown1">
                    Olá, {{ auth()->user()->name }}<i class="material-icons right"></i>
                </a>
                <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="{{ route('site.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<form id="logout-form" action="{{ route('site.logout') }}" method="POST" style="display: none;">
    @csrf
</form>



@endsection

