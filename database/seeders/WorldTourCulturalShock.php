<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorldTourCulturalShock extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'World Tour: Cultural Shock',
            'released_in' => 2019,
        ]);

        $set->factions()->createMany([
            ['label' => 'Legends of Russia'],
            ['label' => 'Legends of West Africa'],
            ['label' => 'Legends of Germany'],
            ['label' => 'Legends of Inca'],
            ['label' => 'Legends of Polynesia'],
        ]);
    }
}
