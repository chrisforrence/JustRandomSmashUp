<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Penguins extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Smash Up Penguins',
            'released_in' => 2019,
        ]);

        $set->factions()->createMany([
            ['label' => 'Penguins'],
        ]);
    }
}
