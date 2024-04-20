<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OopsYouDidItAgainExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'Oops, You Did It Again',
            'released_in' => 2018,
        ]);

        $set->factions()->createMany([
            ['label' => 'Vikings'],
            ['label' => 'Cowboys'],
            ['label' => 'Ancient Egyptians'],
            ['label' => 'Samurai'],
        ]);
    }
}
