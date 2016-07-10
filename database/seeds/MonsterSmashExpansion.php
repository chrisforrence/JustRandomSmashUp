<?php

use Illuminate\Database\Seeder;

class MonsterSmashExpansion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = App\Set::create([
            'name' => "Monster Smash",
            'released_on' => \Carbon\Carbon::createFromDate(2013, 10, 1)
        ]);

        $set->factions()->create(['label' => 'Giant Ants', 'icon' => '']);
        $set->factions()->create(['label' => 'Mad Scientists', 'icon' => '']);
        $set->factions()->create(['label' => 'Vampires', 'icon' => '']);
        $set->factions()->create(['label' => 'Werewolves', 'icon' => '']);
    }
}
