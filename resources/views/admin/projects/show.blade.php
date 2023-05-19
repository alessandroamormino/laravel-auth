@extends('layouts/admin')

@section('content')

<ul class="navbar-nav ml-auto">
  <!-- Authentication Links -->
  @guest
  <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
  </li>
  @if (Route::has('register'))
  <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
  </li>
  @endif
  @else
  <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('admin.dashboard.home')}}">{{__('Dashboard')}}</a>
          <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      </div>
  </li>
  @endguest
</ul>

<div class="main">
  <h1>{{$project->title}}</h1>
  <hr>
  <p>
    Descrizione: {{$project->content}}
  </p>
  <div class="mt-2">Link immagine: {{$project->thumb}}</div>
  <div class="mt-2">Linguaggi: {{$project->languages}}</div>
  <div class="mt-2">Repo: {{$project->repo}}</div>

  <div class="mt-5">
    <a href="{{route('admin.projects.index')}}">Torna all'elenco dei prodotti</a>
  </div>
  
</div>
@endsection