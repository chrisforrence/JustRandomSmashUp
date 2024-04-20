<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhatWereWeThinkingExpansion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $set = Set::create([
            'name' => 'What Were We Thinking?',
            'released_in' => 2017,
        ]);

        $set->factions()->createMany([
            ['label' => 'Teddy Bears'],
            ['label' => 'Grandmas'],
            ['label' => 'Rock Stars'],
            ['label' => 'Explorers'],
        ]);
    }
}
