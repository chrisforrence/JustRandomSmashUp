<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItsYourFaultExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => "It's Your Fault!",
            'released_in' => 2016,
        ]);

        $set->factions()->createMany([
            ['label' => 'Dragons'],
            ['label' => 'Mythic Greeks'],
            ['label' => 'Sharks / Tornadoes'],
            ['label' => 'Superheroes'],
        ]);
    }
}
