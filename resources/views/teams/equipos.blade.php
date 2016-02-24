@extends('layout')


@section('contenido')

  <h1>lista de equipos</h1>

  @foreach($teams as $team)
    <div>nombre: {{$team->name}}</div>
  @endforeach

@stop
