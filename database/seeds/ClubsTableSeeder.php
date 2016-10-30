<?php

use Illuminate\Database\Seeder;
use App\Models\Club;
class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Club::create([
            'title' => 'Новосибирск-Марафон',
            'titleEn' =>'Novosibirsk-Maraphone',
            'alias' =>'nskmarafon',
            'place' => 'Новосибирск',
        ]);
    }
}
