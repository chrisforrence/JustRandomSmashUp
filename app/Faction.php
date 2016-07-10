<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faction extends Model
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
