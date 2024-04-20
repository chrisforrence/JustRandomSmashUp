<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorldTourInternationalIncident extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'World Tour: International Incident',
            'released_in' => 2019,
        ]);

        $set->factions()->createMany([
            ['label' => 'Luchadors'],
            ['label' => 'Mounties'],
            ['label' => 'Musketeers'],
            ['label' => 'Sumo Wrestlers'],
        ]);
    }
}
