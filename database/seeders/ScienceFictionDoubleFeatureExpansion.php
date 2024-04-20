<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScienceFictionDoubleFeatureExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Science Fiction Double Feature',
            'released_in' => 2014,
        ]);

        $set->factions()->createMany([
            ['label' => 'Cyborg Apes'],
            ['label' => 'Shapeshifters'],
            ['label' => 'Super Spies'],
            ['label' => 'Time Travelers'],
        ]);
    }
}
