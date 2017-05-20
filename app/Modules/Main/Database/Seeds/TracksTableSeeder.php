<?php

namespace App\Modules\Main\Database\Seeds;

use Illuminate\Database\Seeder;
use App\Modules\Main\Models\Track;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Track::create([
            'title' => 'Тогучин',
            'club_id' => 1,
        ]);

        Track::create([
            'title' => 'Ерестная',
            'club_id' => 1,
        ]);

        Track::create([
            'title' => 'Кожевниково',
            'club_id' => 1,
        ]);

        Track::create([
            'title' => 'Томский круг',
            'club_id' => 1,
        ]);

        Track::create([
            'title' => 'Фестиваль Центр Сибири',
            'club_id' => 1,
        ]);

        Track::create([
            'title' => 'Чуйский тракт',
            'club_id' => 1,
        ]);
    }
}
