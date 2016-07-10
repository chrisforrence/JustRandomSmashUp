<?php

use Illuminate\Database\Seeder;

class ScienceFictionDoubleFeatureExpansion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $set = App\Set::create([
            'name' => "Science Fiction Double Feature",
            'released_on' => \Carbon\Carbon::createFromDate(2013, 10, 1)
        ]);

        $set->factions()->create(['label' => 'Cyborg Apes', 'icon' => '']);
        $set->factions()->create(['label' => 'Shapeshifters', 'icon' => '']);
        $set->factions()->create(['label' => 'Super Spies', 'icon' => '']);
        $set->factions()->create(['label' => 'Time Travelers', 'icon' => '']);
    }
}
