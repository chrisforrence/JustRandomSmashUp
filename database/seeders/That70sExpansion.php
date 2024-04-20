<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class That70sExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => "That '70s Expansion",
            'released_in' => 2018,
        ]);

        $set->factions()->createMany([
            ['label' => 'Truckers'],
            ['label' => 'Disco Dancers'],
            ['label' => 'Vigilantes'],
            ['label' => 'Kung Fu Fighters'],
        ]);
    }
}
