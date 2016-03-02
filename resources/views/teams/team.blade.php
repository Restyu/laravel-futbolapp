@extends('layout')

@section('contenido')

    <h1> {{$team->name}}</h1>

    <div>ciudad: {{$team->city}}</div>
    <div>fundacion: {{$team->foundation}}</div>
    <div>aficionados: {{$team->partners}}</div>
    <div>estadio: {{$team->stadium}}</div>
    <br>

    <h3>Jugadores</h3>
    <ul>
      @foreach($team->players as $play)
      <li><a href="/players/{{($play->id) }}">{{$play->name}}</a></li>
      @endforeach
    </ul>
  @stop
