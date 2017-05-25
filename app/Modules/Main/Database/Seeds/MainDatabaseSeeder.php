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
        $this->call(ResultsTableSeeder::class);
        $this->call(PersonsClubTableSeeder::class);
    }
}
