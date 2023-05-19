@extends('layouts/admin')

@section('content')

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