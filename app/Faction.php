<?php

namespace App;

use Eloquent;

class Faction extends Eloquent
{
    public $fillable = ['label', 'icon', 'requires_madness', 'requires_monsters', 'requires_treasure'];
    public $timestamps = false;

    public $casts = [
        'requires_madness' => 'boolean',
        'requires_monsters' => 'boolean',
        'requires_treasure' => 'boolean',
    ];
    
    public function set()
    {
        return $this->belongsTo('App\Set');
    }

}
