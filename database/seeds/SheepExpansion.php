<?php

use Illuminate\Database\Seeder;

class SheepExpansion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = App\Set::create([
            'name' => "Sheep Deck",
            'released_on' => \Carbon\Carbon::createFromDate(2017, 9, 1)
        ]);

        $set->factions()->create(['label' => 'Sheep', 'icon' => '']);
    }
}
