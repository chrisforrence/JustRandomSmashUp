<?php

use Illuminate\Database\Seeder;
use App\Set;

class CoreGame extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = Set::create(['name' => 'Core Set', 'released_on' => \Carbon\Carbon::createFromDate(2013, 10, 1)]);
        
        $set->factions()->create(['label' => 'Aliens', 'icon' => '']);
        $set->factions()->create(['label' => 'Dinosaurs', 'icon' => '']);
        $set->factions()->create(['label' => 'Ninjas', 'icon' => '']);
        $set->factions()->create(['label' => 'Pirates', 'icon' => '']);
        $set->factions()->create(['label' => 'Robots', 'icon' => '']);
        $set->factions()->create(['label' => 'Tricksters', 'icon' => '']);
        $set->factions()->create(['label' => 'Wizards', 'icon' => '']);
        $set->factions()->create(['label' => 'Zombies', 'icon' => '']);
    }
}
