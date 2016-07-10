<?php

use Illuminate\Database\Seeder;

class MunchkinExpansion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = App\Set::create([
            'name' => "Smash Up: Munchkin",
            'released_on' => \Carbon\Carbon::createFromDate(2013, 10, 1)
        ]);

        $set->factions()->create(['label' => 'Clerics']);
        $set->factions()->create(['label' => 'Dwarves', 'requires_treasure' => true]);
        $set->factions()->create(['label' => 'Elves']);
        $set->factions()->create(['label' => 'Halflings']);
        $set->factions()->create(['label' => 'Mages', 'requires_monsters' => true, 'requires_treasure' => true]);
        $set->factions()->create(['label' => 'Orcs']);
        $set->factions()->create(['label' => 'Thieves', 'requires_treasure' => true]);
        $set->factions()->create(['label' => 'Warriors', 'requires_monsters' => true, 'requires_treasure' => true]);
    }
}
