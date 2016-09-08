<?php

use Illuminate\Database\Seeder;
use App\Set;

class CeaseAndDesistExpansion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = Set::create(['name' => 'Cease & Desist', 'released_on' => \Carbon\Carbon::createFromDate(2016, 9, 1)]);
        
        $set->factions()->create(['label' => 'Astroknights', 'icon' => '']);
        $set->factions()->create(['label' => 'Star Roamers', 'icon' => '']);
        $set->factions()->create(['label' => 'Changerbots', 'icon' => '']);
        $set->factions()->create(['label' => 'Ignobles', 'icon' => '']);
    }
}
