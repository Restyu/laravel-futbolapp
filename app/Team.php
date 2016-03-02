<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App;

class Team extends Model
{
  protected $fillable = ['equipo'];

    public function players(){

      return $this->hasMany(Player::class);
    }

}
