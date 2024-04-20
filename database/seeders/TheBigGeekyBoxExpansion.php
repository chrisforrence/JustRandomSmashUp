<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TheBigGeekyBoxExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'The Big Geeky Box',
            'released_in' => 2014,
        ]);

        $set->factions()->createMany([
            ['label' => 'Geeks'],
        ]);
    }
}
