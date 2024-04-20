<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Marvel extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Marvel',
            'released_in' => 2021,
        ]);

        $set->factions()->createMany([
            ['label' => 'Spider-Verse'],
            ['label' => 'Avengers'],
            ['label' => 'Hydra'],
            ['label' => 'S.H.I.E.L.D.'],
            ['label' => 'Ultimates'],
            ['label' => 'Sinister Six'],
            ['label' => 'Kree'],
            ['label' => 'Masters of Evil'],
        ]);
    }
}
