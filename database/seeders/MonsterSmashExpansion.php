<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonsterSmashExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Monster Smash',
            'released_in' => 2014,
        ]);

        $set->factions()->createMany([
            ['label' => 'Giant Ants'],
            ['label' => 'Mad Scientists'],
            ['label' => 'Vampires'],
            ['label' => 'Werewolves'],
        ]);
    }
}
