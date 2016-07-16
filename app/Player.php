<?php

namespace App;

use Eloquent;

class Player extends Eloquent
{
    
    public $fillable = [];

    public $timestamps = false;

    public function factions()
    {
        return $this->belongsToMany('App\Faction', 'players_factions');
    }

    public function game()
    {
        return $this->belongsTo('App\Game');
    }
}
