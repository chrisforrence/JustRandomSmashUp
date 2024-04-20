<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BigInJapanExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Smash Up: Big in Japan',
            'released_in' => 2017,
        ]);

        $set->factions()->createMany([
            ['label' => 'Kaiju'],
            ['label' => 'Mystical Girls'],
            ['label' => 'Mega Troopers'],
            ['label' => 'Itty Critters'],
        ]);
    }
}
