<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunchkinExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $set = Set::create([
            'name' => 'Smash Up: Munchkin',
            'released_in' => 2015,
        ]);

        $set->factions()->createMany([
            ['label' => 'Clerics'],
            ['label' => 'Dwarves', 'requires_treasure' => true],
            ['label' => 'Elves'],
            ['label' => 'Halflings'],
            ['label' => 'Mages', 'requires_monsters' => true, 'requires_treasure' => true],
            ['label' => 'Orcs'],
            ['label' => 'Thieves', 'requires_treasure' => true],
            ['label' => 'Warriors', 'requires_monsters' => true, 'requires_treasure' => true],
        ]);
    }
}
