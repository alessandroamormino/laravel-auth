@extends('layouts/admin')

@section('content')

<h3>Tutti i progetti</h3>

<table class="table table-dark ">
  <thead>
    <th>Titolo</th>
    <th>Contenuto</th>
    <th>Slug</th>
    <th>Immagine</th>
    <th>Linguaggi</th>
    <th>Repo</th>
    <th>Dettaglio</th>
  </thead>

  <tbody>

    @foreach($projects as $project)
    <tr >
      <td>{{$project->title}}</td>
      <td>{{$project->content}}</td>
      <td>{{$project->slug}}</td>
      <td>{{$project->thumb}}</td>
      <td>{{$project->languages}}</td>
      <td>{{$project->repo}}</td>
      <td><a href="{{route('admin.projects.show', $project->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
    </tr>
    @endforeach


  </tbody>
</table>
@endsection