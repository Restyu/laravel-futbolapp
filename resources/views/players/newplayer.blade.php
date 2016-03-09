@extends('layout')

@section('contenido')

  <h2>Nuevo jugador</h2>

  <form  action="" method="post">

    <div class="form-group">
      <label for="name">monbre</label>
      <input class="form-control" type="text" name="name" value="">
    </div>
    <div class="form-group">
      <label for="city">nacionalidad</label>
      <input class="form-control" type="text" name="nacionality" value="">
    </div>
    <div class="form-group">
      <label for="name">posicion</label>
      <input class="form-control" type="text" name="position" value="">
    </div>
    <div class="form-group">
      <label for="name">nacimiento</label>
      <input class="form-control" type="text" name="birthdate" value="">
    </div>
    <div class="form-group">
      <label for="name">numero</label>
      <input class="form-control" type="text" name="number" value="">
    </div>

    <div class="form-group">
      <select>
          @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
          @endforeach
      </select>
    </div>

    <button class="btn btn-primary" type="submit">añadir jugador</button>
  </form>



@stop
