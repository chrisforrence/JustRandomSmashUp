<?php

namespace App;

use Eloquent;
use Exception;
use Illuminate\Support\Collection;

class Game extends Eloquent
{

    public $fillable = ['created_at', 'requires_madness', 'requires_treasure', 'requires_monsters'];

    public $timestamps = false;

    public $casts = [
        'requires_madness' => 'boolean',
        'requires_treasure' => 'boolean',
        'requires_monsters' => 'boolean',
    ];

    public function players()
    {
        return $this->hasMany('App\Player');
    }

    public function factions()
    {
        return $this->hasManyThrough('App\Faction', 'App\Player');
    }

    public function generate($player_count, $sets)
    {
        $factions = Faction::whereIn('set_id', $sets)->get()->shuffle();

        $players = new Collection();
        for ($i = 0; $i < $player_count; $i++) {
            $players->push($this->players()->create([]));
        }

        foreach ($players as $player) {
            $player->factions()->attach($factions->pop()->id);
        }

        $players->reverse();

        foreach ($players as $player) {
            $player->factions()->attach($factions->pop()->id);
        }

        $this->requires_madness = !$players->filter(function($player) {
            return !$player->factions->filter(function($faction) {
                return $faction->requires_madness;
            })->isEmpty();
        })->isEmpty();

        $this->requires_monsters = !$players->filter(function($player) {
            return !$player->factions->filter(function($faction) {
                return $faction->requires_monsters;
            })->isEmpty();
        })->isEmpty();
        
        $this->requires_treasure = !$players->filter(function($player) {
            return !$player->factions->filter(function($faction) {
                return $faction->requires_treasure;
            })->isEmpty();
        })->isEmpty();

        $this->save();

        return $this;
    }
}
