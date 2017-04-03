<?php

use Illuminate\Database\Seeder;
use \App\Models\Distance;

class DistancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Distance::create([
            'distance' => 200,
        ]);

        Distance::create([
            'distance' => 300,
        ]);

        Distance::create([
            'distance' => 400,
        ]);

        Distance::create([
            'distance' => 600,
        ]);

        Distance::create([
            'distance' => 1000,
        ]);

        Distance::create([
            'distance' => 1200,
        ]);
    }
}
