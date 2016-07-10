<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    
    public $fillable = ['name', 'released_on'];

    public $timestamps = false;
    public function factions()
    {
        return $this->hasMany('App\Faction');
    }
}
