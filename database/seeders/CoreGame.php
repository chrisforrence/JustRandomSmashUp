<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoreGame extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Core Set',
            'released_in' => 2012,
        ]);

        $set->factions()->createMany([
            ['label' => 'Aliens'],
            ['label' => 'Dinosaurs'],
            ['label' => 'Ninjas'],
            ['label' => 'Pirates'],
            ['label' => 'Robots'],
            ['label' => 'Tricksters'],
            ['label' => 'Wizards'],
            ['label' => 'Zombies'],
        ]);
    }
}
