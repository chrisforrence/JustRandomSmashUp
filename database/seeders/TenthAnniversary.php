<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenthAnniversary extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => '10th Anniversary',
            'released_in' => 2022,
        ]);

        $set->factions()->createMany([
            ['label' => 'Skeletons'],
            ['label' => 'Mermaids'],
            ['label' => 'World Champions'],
            ['label' => 'New Titans'],
        ]);
    }
}
