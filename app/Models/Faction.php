<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faction extends Model
{
    use HasFactory, HasUuids;

    public $casts = [
        'requires_madness' => 'boolean',
        'requires_monsters' => 'boolean',
        'requires_treasure' => 'boolean',
        'requires_stasis' => 'boolean',
    ];

    public $timestamps = false;

    public function set()
    {
        return $this->belongsTo(Set::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
