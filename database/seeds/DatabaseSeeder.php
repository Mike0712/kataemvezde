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
        $this->call(UsersTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(DistancesTableSeeder::class);
        $this->call(TracksTableSeeder::class);
        $this->call(TrackDistanceLinkTableSeeder::class);
        $this->call(LinkTableSeeder::class);
        $this->call(CompetitionsTableSeeder::class);
        $this->call(CheckpointsTableSeeder::class);
        $this->call(PersonsTableSeeder::class);
        $this->call(ResultsTableSeeder::class);
        $this->call(PersonsClubTableSeeder::class);
    }
}
