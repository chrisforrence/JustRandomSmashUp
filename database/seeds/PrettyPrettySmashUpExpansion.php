<?php

use Illuminate\Database\Seeder;

class PrettyPrettySmashUpExpansion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = App\Set::create([
            'name' => "Pretty Pretty Smash Up",
            'released_on' => \Carbon\Carbon::createFromDate(2013, 10, 1)
        ]);

        $set->factions()->create(['label' => 'Fairies', 'icon' => '']);
        $set->factions()->create(['label' => 'Kitty Cats', 'icon' => '']);
        $set->factions()->create(['label' => 'Mythic Horses', 'icon' => '']);
        $set->factions()->create(['label' => 'Princesses', 'icon' => '']);
    }
}
