<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory, HasUuids;

    public $timestamps = false;

    public function factions()
    {
        return $this->hasMany(Faction::class);
    }
}
