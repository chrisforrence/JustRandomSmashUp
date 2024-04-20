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
            ['label' => 'Elder Things', 'requires_madness' => true],
            ['label' => 'Innsmouth', 'requires_madness' => true],
            ['label' => 'Cthulhu Cultists', 'requires_madness' => true],
            ['label' => 'Miskatonic University', 'requires_madness' => true],
        ]);
    }
}
