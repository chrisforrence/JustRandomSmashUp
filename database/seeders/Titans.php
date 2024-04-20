<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Titans extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Smash Up TITANS',
            'released_in' => 2019,
        ]);

        $set->factions()->createMany([
            ['label' => 'Titans'],
        ]);
    }
}