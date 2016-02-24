@extends('layout')

@section('contenido')

    <h1> {{$team->name}}</h1>

    <div>ciudad: {{$team->city}}</div>
    <div>fundacion: {{$team->foundation}}</div>
    <div>aficionados: {{$team->partners}}</div>
    <div>estadio: {{$team->stadium}}</div>
    <br>
    
    <ul>
      @foreach($team->players as $play)
      <li>{{$play->name}}</li>
      @endforeach
    </ul>
  @stop
