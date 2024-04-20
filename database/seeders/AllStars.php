<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllStars extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'All Stars',
            'released_in' => 2017,
        ]);

        $set->factions()->createMany([
            ['label' => 'All Stars'],
        ]);
    }
}
