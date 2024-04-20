<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory, HasUuids;

    public $timestamps = false;

    public $casts = [
        'requires_madness' => 'boolean',
        'requires_treasure' => 'boolean',
        'requires_monsters' => 'boolean',
        'requires_stasis' => 'boolean',
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function factions()
    {
        return $this->hasManyThrough(Faction::class, Player::class);
    }
}
