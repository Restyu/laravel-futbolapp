<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
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
}
