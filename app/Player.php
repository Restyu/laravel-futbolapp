<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App;

class Player extends Model
{
    public function team(){

      return $this->belongsTo(Team::class);
    }
}
