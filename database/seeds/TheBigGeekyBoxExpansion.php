<?php

use Illuminate\Database\Seeder;

class TheBigGeekyBoxExpansion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = App\Set::create([
            'name' => "The Big Geeky Box",
            'released_on' => \Carbon\Carbon::createFromDate(2013, 10, 1)
        ]);

        $set->factions()->create(['label' => 'Geeks', 'icon' => '']);
    }
}
