@extends('layout')

@section('contenido')

  <h1>lista de equipos</h1>

  @foreach($teams as $team)
    <div>
      <a href="{{ url('teams/'.$team->id) }}">{{ $team->name }}</a>
      <a class="pull-right" href="{{ url('/'.'teams/'.$team->id.'/edit') }}">editar</a>
    </div>
  @endforeach

  <br>
  <br>

  <form method="post" action="">
    <div class="form-group">
      <label>nombre equipo
        <input type="text" name="name" class="form-control" value="">
      </label>
      <label>ciudad
          <input type="text" name="city" class="form-control" value="">
      </label>
      <label>fundacion
          <input type="text" name="foundation" class="form-control" value="">
      </label>
      <label>socios
          <input type="text" name="partners" class="form-control" value="">
      </label>
      <label>estadio
          <input type="text" name="stadium" class="form-control" value="">
      </label>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-info">Añadir equipo</button>
    </div>
  </form>

@stop
