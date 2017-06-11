<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CoreGame::class);
        $this->call(AwesomeLevel9000Expansion::class);
        $this->call(TheObligatoryCthulhuExpansion::class);
        $this->call(ScienceFictionDoubleFeatureExpansion::class);
        $this->call(TheBigGeekyBoxExpansion::class);
        $this->call(MonsterSmashExpansion::class);
        $this->call(PrettyPrettySmashUpExpansion::class);
        $this->call(MunchkinExpansion::class);
        $this->call(ItsYourFaultExpansion::class);
        $this->call(CeaseAndDesistExpansion::class);
        $this->call(WhatWereWeThinkingExpansion::class);
        $this->call(SheepExpansion::class);
    }
}
