<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExcellentMoviesDudesExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Excellent Movies, Dudes!',
            'released_in' => 2023,
        ]);

        $set->factions()->createMany([
            ['label' => 'Action Heroes'],
            ['label' => 'Backtimers', 'requires_stasis' => true],
            ['label' => 'Extramorphs'],
            ['label' => 'Wraithrustlers'],
        ]);
    }
}
