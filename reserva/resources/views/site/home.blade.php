@extends('site.layout')
@section('conteudo')
   <nav class="red">
      <div class="nav-wrapper container">
          <a href="#" class="brand-logo center">IFLab</a>
          <ul id="nav-mobile" class="left">
              <li><a href="">Home</a></li>
              <li><a href="{{route('laboratorio.index')}}">labs</a></li>
          </ul>

          <ul id="nav-mobile" class="right">
              <li><a href="#" class="dropdown-trigger" data-target="dropdown1">Olá, {{ auth()->user()->name }}<i class="material-icons right">expand_more</i></a></li>
          </ul>
      </div>        
   </nav>
@endsection