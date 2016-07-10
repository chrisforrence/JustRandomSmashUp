<?php

use App\Set;
use Illuminate\Database\Seeder;

class TheObligatoryCthulhuExpansion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $set = Set::create([
            'name' => 'The Obligatory Cthulhu Set',
            'released_on' => \Carbon\Carbon::createFromDate(2013, 10, 1)
        ]);

        $set->factions()->create(['label' => 'Elder Things', 'requires_madness' => true]);
        $set->factions()->create(['label' => 'Innsmouth', 'requires_madness' => true]);
        $set->factions()->create(['label' => 'Minions of Cthulhu', 'requires_madness' => true]);
        $set->factions()->create(['label' => 'Miskatonic University', 'requires_madness' => true]);
    }
    
}
