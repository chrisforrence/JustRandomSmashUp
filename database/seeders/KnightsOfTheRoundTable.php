<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KnightsOfTheRoundTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Smash Up Knights of the Round Table',
            'released_in' => 2021,
        ]);

        $set->factions()->createMany([
            ['label' => 'Knights of the Round Table'],
        ]);
    }
}
