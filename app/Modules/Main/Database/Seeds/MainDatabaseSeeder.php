<?php

namespace App\Modules\Main\Database\Seeds;

use Illuminate\Database\Seeder;

class MainDatabaseSeeder extends Seeder
{
    /**
     * Run seeds for Main
     */
    public function run()
    {
        $this->call(ClubsTableSeeder::class);
        $this->call(DistancesTableSeeder::class);
        $this->call(TracksTableSeeder::class);
        $this->call(TrackDistanceLinkTableSeeder::class);
        $this->call(LinkTableSeeder::class);
        $this->call(CompetitionsTableSeeder::class);
        $this->call(CheckpointsTableSeeder::class);
        $this->call(ResultsTableSeeder::class);
        $this->call(PersonsClubTableSeeder::class);
    }
}
