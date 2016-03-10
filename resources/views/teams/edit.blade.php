@extends('layout')

@section('contenido')
  <h2>Actualizar equipo</h2>

  <form  action="{{ url('/teams/'.$team->id)}}" method="post">
      {{ csrf_field() }}
    <input type="hidden" name="_method" value="patch">
    <div class="form-group">
      <label for="name">monbre</label>
      <input class="form-control" type="text" name="name" value="{{ $team->name}}">
    </div>
    <div class="form-group">
      <label for="city">ciudad</label>
      <input class="form-control" type="text" name="city" value="{{ $team->city}}">
    </div>
    <div class="form-group">
      <label for="name">foundation</label>
      <input class="form-control" type="text" name="foundation" value="{{ $team->foundation}}">
    </div>
    <div class="form-group">
      <label for="name">socios</label>
      <input class="form-control" type="text" name="partners" value="{{ $team->partners}}">
    </div>
    <div class="form-group">
      <label for="name">estadio</label>
      <input class="form-control" type="text" name="stadium" value="{{ $team->stadium}}">
    </div>
    <button class="btn btn-primary" type="submit">editar</button>
     @if( count($errors) )
        @foreach ($errors->all() as $error)
          <span>{{ $error }}</span>
        @endforeach
      @endif

  </form>


@stop
