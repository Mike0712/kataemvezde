<?php

namespace App\Modules\Main\Database\Seeds;

use Illuminate\Database\Seeder;
use DB;

class PersonsClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person_club')->insert([
            'person_id' => 1,
            'club_id' => 1,
        ]);
    
        DB::table('person_club')->insert([
            'person_id' => 2,
            'club_id' => 1,
        ]);
    
        DB::table('person_club')->insert([
            'person_id' => 3,
            'club_id' => 1,
        ]);
    
        DB::table('person_club')->insert([
            'person_id' => 3,
            'club_id' => 2,
        ]);
    
        DB::table('person_club')->insert([
            'person_id' => 4,
            'club_id' => 1,
        ]);
    
        DB::table('person_club')->insert([
            'person_id' => 5,
            'club_id' => 1,
        ]);
    
        DB::table('person_club')->insert([
            'person_id' => 6,
            'club_id' => 1,
        ]);
    
        DB::table('person_club')->insert([
            'person_id' => 7,
            'club_id' => 1,
        ]);
    
        DB::table('person_club')->insert([
            'person_id' => 8,
            'club_id' => 1,
        ]);
    
        DB::table('person_club')->insert([
            'person_id' => 9,
            'club_id' => 1,
        ]);
    
        DB::table('person_club')->insert([
            'person_id' => 10,
            'club_id' => 1,
        ]);
    }
}
