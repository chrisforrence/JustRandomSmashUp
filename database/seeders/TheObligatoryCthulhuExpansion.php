<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TheObligatoryCthulhuExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'The Obligatory Cthulhu Set',
            'released_in' => 2013,
        ]);

        $set->factions()->createMany([
            ['label' => 'Elder Things'],
            ['label' => 'Innsmouth'],
            ['label' => 'Cthulhu Cultists'],
            ['label' => 'Miskatonic University'],
        ]);
    }
}
