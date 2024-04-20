<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CeaseAndDesistExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Cease and Desist',
            'released_in' => 2016,
        ]);

        $set->factions()->createMany([
            ['label' => 'Star Roamers'],
            ['label' => 'Astro Knights'],
            ['label' => 'Changerbots'],
            ['label' => 'Ignobles'],
        ]);
    }
}
