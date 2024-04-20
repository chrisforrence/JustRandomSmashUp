<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeensExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Smash Up Teens',
            'released_in' => 2023,
        ]);

        $set->factions()->createMany([
            ['label' => 'Teens'],
        ]);
    }
}
