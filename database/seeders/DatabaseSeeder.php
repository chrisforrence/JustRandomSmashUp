<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CoreGame::class,
            AllStars::class,
            AwesomeLevel9000::class,
            BiggerGeekierBox::class,
            BigInJapanExpansion::class,
            CeaseAndDesistExpansion::class,
            Disney::class,
            ExcellentMoviesDudesExpansion::class,
            Goblins::class,
            ItsYourFaultExpansion::class,
            KnightsOfTheRoundTable::class,
            Marvel::class,
            MonsterSmashExpansion::class,
            MunchkinExpansion::class,
            OopsYouDidItAgainExpansion::class,
            Penguins::class,
            PrettyPrettySmashUpExpansion::class,
            ScienceFictionDoubleFeatureExpansion::class,
            SheepExpansion::class,
            TeensExpansion::class,
            TenthAnniversary::class,
            That70sExpansion::class,
            TheBigGeekyBoxExpansion::class,
            TheObligatoryCthulhuExpansion::class,
            Titans::class,
            WhatWereWeThinkingExpansion::class,
            WorldTourCulturalShock::class,
            WorldTourInternationalIncident::class,
        ]);
    }
}
