<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrettyPrettySmashUpExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Pretty Pretty Smash Up',
            'released_in' => 2015,
        ]);

        $set->factions()->createMany([
            ['label' => 'Fairies'],
            ['label' => 'Kitty Cats'],
            ['label' => 'Mythic Horses'],
            ['label' => 'Princesses'],
        ]);
    }
}
