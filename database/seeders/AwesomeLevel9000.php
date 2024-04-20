<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwesomeLevel9000 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Awesome Level 9000',
            'released_in' => 2013,
        ]);

        $set->factions()->createMany([
            ['label' => 'Bear Cavalry'],
            ['label' => 'Ghosts'],
            ['label' => 'Killer Plants'],
            ['label' => 'Steampunks'],
        ]);
    }
}
