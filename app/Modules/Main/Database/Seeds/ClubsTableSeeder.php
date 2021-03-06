<?php

namespace App\Modules\Main\Database\Seeds;

use Illuminate\Database\Seeder;
use App\Modules\Main\Models\Club;
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

        Club::create([
            'title' => 'НВК-Райдер',
            'titleEn' =>'NVK-Raider',
            'alias' =>'nvkraider',
            'place' => 'Новосибирск',
        ]);
    }
}
