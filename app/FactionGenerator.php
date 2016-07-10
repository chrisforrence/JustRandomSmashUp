<?php
namespace App;

class FactionGenerator
{
    protected $results = [
        'decks'
    ];
    protected $players = 2;
    protected $sets = [];
    public function __construct()
    {

    }

    public function withPlayers($players)
    {
        $this->players = $players;

        return $this;
    }

    public function withSets($sets)
    {
        $this->sets = $sets;

        return $this;
    }

    public function generate()
    {
        $result = ['additional_decks' => [], 'players' => []];
        
        // We'll do a snake draft
        $factions = Faction::whereIn('set_id', $this->sets)->get()->shuffle();
        for($i = 0; $i < $this->players; $i++) {
            $result['players'][] = ['factions' => []];
        }
        for($i = 0; $i < $this->players; $i++) {
            $faction = $factions->pop();
            if($faction->requires_madness && !in_array('Madness', $result['additional_decks'])) {
                $result['additional_decks'][] = 'Madness';
            }
            if($faction->requires_treasure && !in_array('Treasure', $result['additional_decks'])) {
                $result['additional_decks'][] = 'Treasure';
            }
            if($faction->requires_monsters && !in_array('Monsters', $result['additional_decks'])) {
                $result['additional_decks'][] = 'Monsters';
            }
            $result['players'][$i]['factions'][] = $faction;
        }
        for($i = $this->players - 1; $i >= 0; $i--) {
            $faction = $factions->pop();
            if($faction->requires_madness && !in_array('Madness', $result['additional_decks'])) {
                $result['additional_decks'][] = 'Madness';
            }
            if($faction->requires_treasure && !in_array('Treasure', $result['additional_decks'])) {
                $result['additional_decks'][] = 'Treasure';
            }
            if($faction->requires_monsters && !in_array('Monsters', $result['additional_decks'])) {
                $result['additional_decks'][] = 'Monsters';
            }
            $result['players'][$i]['factions'][] = $faction;
        }
        return $result;
    }
}