@extends('layout')

@section('contenido')

  <h1>{{$player->name}}</h1>
  <div>nacionalidad: {{$player->nacionality}}</div>
  <div>posicion: {{$player->position}}</div>
  <div>F.nac: {{$player->birthdate}}</div>
  <div>numero: {{$player->number}}</div>
  

@stop
