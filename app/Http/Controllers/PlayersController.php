<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Player;
use App\Team;

class PlayersController extends Controller
{
    public function index(){

      $players = Player::all();

      return view('players.jugadores', compact('players') );
    }

    public function show(Player $player){

      return view('players.player' , compact('player') );
    }

    public function new(){

      $teams = Team::all();

      return view('players.newplayer', compact('teams') );
    }

}
