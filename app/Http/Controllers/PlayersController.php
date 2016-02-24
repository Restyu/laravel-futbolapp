<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Player;

class PlayersController extends Controller
{
    public function index(){

      $players = Player::all();

      return view('players.jugadores', compact('players') );
    }

    public function show(Player $player){

      return view('players.player' , compact('player') );
    }
}
