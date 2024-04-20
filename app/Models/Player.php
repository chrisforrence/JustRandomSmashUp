<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory, HasUuids;

    public $timestamps = false;

    public function faction()
    {
        return $this->belongsTo(Faction::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
