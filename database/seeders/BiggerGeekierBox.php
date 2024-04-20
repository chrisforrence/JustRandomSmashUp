<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiggerGeekierBox extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'The Bigger Geekier Box',
            'released_in' => 2018,
        ]);

        $set->factions()->createMany([
            ['label' => 'Geeks'],
            ['label' => 'All-Stars'],
        ]);
    }
}
