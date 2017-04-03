<?php

use Illuminate\Database\Seeder;
use App\Models\Competition;

class CompetitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Competition::create([
            'date_time' => '2016-09-03 9:00',
            'track_id' => 1,
        ]);

        Competition::create([
            'date_time' => '2016-08-16 7:00',
            'track_id' => 2,
        ]);

        Competition::create([
            'date_time' => '2016-08-01 7:00',
            'track_id' => 3,
        ]);

        Competition::create([
            'date_time' => '2016-07-19 7:00',
            'track_id' => 4,
        ]);

        Competition::create([
            'date_time' => '2016-07-04 9:00',
            'track_id' => 5,
            'distance_id' => 1,
        ]);

        Competition::create([
            'date_time' => '2016-07-04 8:00',
            'track_id' => 5,
            'distance_id' => 2,
        ]);

        Competition::create([
            'date_time' => '2016-07-04 8:30',
            'track_id' => 5,
            'distance_id' => 3,
        ]);

        Competition::create([
            'date_time' => '2016-07-04 8:30',
            'track_id' => 5,
            'distance_id' => 4,
        ]);

        Competition::create([
            'date_time' => '2016-07-04 7:00',
            'track_id' => 5,
            'distance_id' => 5,
        ]);

        Competition::create([
            'date_time' => '2017-06-04 7:00',
            'track_id' => 5,
            'distance_id' => 6,
        ]);
    }
}
