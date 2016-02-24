@extends('layout')


@section('contenido')

  <h1>lista de jugadores</h1>

  @foreach($players as $player)
    <div>nombre: {{$player->name}}</div>
    <div>nacionalidad: {{$player->nacionality}}</div>
    <div>posiscion: {{$player->position}}</div>
    <div>F.nac :{{$player->birthdate}}</div>
    <div>numero: {{$player->number}}</div>
    <br>
  @endforeach

@stop
