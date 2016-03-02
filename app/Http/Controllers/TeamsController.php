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

      $team = new Team;
      $team->name = $request->name;
      $team->city = $request->city;
      $team->foundation = $request->foundation;
      $team->partners = $request->partners;
      $team->stadium = $request->stadium;
      $team->save();

      return back();
    }
}
