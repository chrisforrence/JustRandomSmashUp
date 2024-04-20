<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Disney extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Disney',
            'released_in' => 2022,
        ]);

        $set->factions()->createMany([
            ['label' => 'Beauty and the Beast'],
            ['label' => 'Big Hero 6'],
            ['label' => 'Mulan'],
            ['label' => 'Wreck-It Ralph'],
            ['label' => 'The Lion King'],
            ['label' => 'Aladdin'],
            ['label' => 'Frozen'],
            ['label' => 'The Nightmare Before Christmas'],
        ]);
    }
}
