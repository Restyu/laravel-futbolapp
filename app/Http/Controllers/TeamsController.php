<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Team;

class TeamsController extends Controller
{
    public function index(){

      $teams = Team::all();

      return view('teams.equipos' , compact('teams') );
    }

    public function show(Team $team){

      return view('teams.team', compact('team') );
    }

    public function store(Request $request){

      $this->validate($request, [
        'name' => 'required|string',
        'city' => 'required|string',
        'foundation' => 'required|numeric',
        'partners' => 'required|numeric',
        'stadium' => 'required|string',
      ],[
        'name.required' => 'Debes introducir un nombre de equipo',
        'city.required' => 'Debes la ciudad del equipo',
        'foundation.required' => 'Debes introducir el año de fundacion del  equipo',
        'partners.required' => 'Debes introducir los socios  del equipo',
        'stadium.required' => 'Debes introducir el nombre de estadio',
        'foundation.numeric' => 'Tiene que ser un numero merluzo',
        'stadium.numeric' => 'Tiene que ser numerico',

      ]);

      $team = new Team;
      $team->name = $request->name;
      $team->city = $request->city;
      $team->foundation = $request->foundation;
      $team->partners = $request->partners;
      $team->stadium = $request->stadium;
      $team->save();

      return back();
    }

    public function edit(Team $team){

      return view('teams.edit' , compact('team') );
    }

    public function update(Request $request, Team $team){

      $this->validate($request, [
        'name' => 'required|string',
        'city' => 'required|string',
        'foundation' => 'required|numeric',
        'partners' => 'required|numeric',
        'stadium' => 'required|string',
      ],[
        'name.required' => 'Debes introducir un nombre de equipo',
        'city.required' => 'Debes la ciudad del equipo',
        'foundation.required' => 'Debes introducir el año de fundacion del  equipo',
        'partners.required' => 'Debes introducir los socios  del equipo',
        'stadium.required' => 'Debes introducir el nombre de estadio',
        'foundation.numeric' => 'Tiene que ser un numero merluzo',
        'stadium.numeric' => 'Tiene que ser numerico',

      ]);

      $team->update( $request->all() );

      return redirect('teams');
    }
}
