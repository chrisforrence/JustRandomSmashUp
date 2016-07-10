<?php

use App\Set;
use Illuminate\Database\Seeder;

class AwesomeLevel9000Expansion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = Set::create(['name' => 'Awesome Level 9000', 'released_on' => \Carbon\Carbon::createFromDate(2013, 10, 1)]);

        $set->factions()->create(['label' => 'Bear Cavalry', 'icon' => '']);
        $set->factions()->create(['label' => 'Ghosts', 'icon' => '']);
        $set->factions()->create(['label' => 'Killer Plants', 'icon' => '']);
        $set->factions()->create(['label' => 'Steampunks', 'icon' => '']);
    }
}
