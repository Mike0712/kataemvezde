<?php

namespace App\Modules\Main\Database\Seeds;

use Illuminate\Database\Seeder;
use DB;

class TrackDistanceLinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('track_distance_link')->insert([
            'track_id' => 1,
            'distance_id' => 1,
            'link_id' => 1,
        ]);

        DB::table('track_distance_link')->insert([
            'track_id' => 2,
            'distance_id' => 2,
            'link_id' => 2,
        ]);

        DB::table('track_distance_link')->insert([
            'track_id' => 3,
            'distance_id' => 3,
            'link_id' => 3,
        ]);

        DB::table('track_distance_link')->insert([
            'track_id' => 4,
            'distance_id' => 4,
            'link_id' => 4,
        ]);

        DB::table('track_distance_link')->insert([
            'track_id' => 5,
            'distance_id' => 1,
            'link_id' => 5,
        ]);

        DB::table('track_distance_link')->insert([
            'track_id' => 5,
            'distance_id' => 2,
            'link_id' => 6,
        ]);

        DB::table('track_distance_link')->insert([
            'track_id' => 5,
            'distance_id' => 3,
            'link_id' => 7,
        ]);

        DB::table('track_distance_link')->insert([
            'track_id' => 5,
            'distance_id' => 4,
            'link_id' => 8,
        ]);
        DB::table('track_distance_link')->insert([
            'track_id' => 5,
            'distance_id' => 5,
            'link_id' => 9,
        ]);

        DB::table('track_distance_link')->insert([
            'track_id' => 6,
            'distance_id' => 6,
            'link_id' => 10,
        ]);
    }
}
