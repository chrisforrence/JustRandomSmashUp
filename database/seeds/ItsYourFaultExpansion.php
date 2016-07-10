<?php

use Illuminate\Database\Seeder;

class ItsYourFaultExpansion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = App\Set::create([
            'name' => "Smash Up: It's Your Fault",
            'released_on' => \Carbon\Carbon::createFromDate(2013, 10, 1)
        ]);

        $set->factions()->create(['label' => 'Dragons', 'icon' => '']);
        $set->factions()->create(['label' => 'Mythic Greeks', 'icon' => '']);
        $set->factions()->create(['label' => 'Sharks', 'icon' => '']);
        $set->factions()->create(['label' => 'Superheroes', 'icon' => '']);
        $set->factions()->create(['label' => 'Tornadoes', 'icon' => '']);
    }
}
