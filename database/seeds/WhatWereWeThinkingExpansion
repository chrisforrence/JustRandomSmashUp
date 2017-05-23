<?php
use Illuminate\Database\Seeder;
use App\Set;

class WhatWereWeThinkingExpansion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = Set::create(['name' => 'What Were We Thinking', 'released_on' => \Carbon\Carbon::createFromDate(2017, 3, 29)]);
        
        $set->factions()->create(['label' => 'Teddybears', 'icon' => '']);
        $set->factions()->create(['label' => 'Grandmas', 'icon' => '']);
        $set->factions()->create(['label' => 'Rock Stars', 'icon' => '']);
        $set->factions()->create(['label' => 'Explorers', 'icon' => '']);
    }
}
