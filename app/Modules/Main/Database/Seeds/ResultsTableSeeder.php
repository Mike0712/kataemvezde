<?php

namespace App\Modules\Main\Database\Seeds;

use Illuminate\Database\Seeder;
use App\Modules\Main\Models\Result;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Result::create([
            'time' => '2016-09-03 09:06',
            'user_id' => 1,
            'checkpoint_id' => 1,
        ]);

        Result::create([
            'time' => '2016-09-03 12:38',
            'user_id' => 1,
            'checkpoint_id' => 2,
        ]);

        Result::create([
            'time' => '2016-09-03 16:33',
            'user_id' => 1,
            'checkpoint_id' => 3,
        ]);

        Result::create([
            'time' => '2016-09-03 09:06',
            'user_id' => 2,
            'checkpoint_id' => 1,
        ]);

        Result::create([
            'time' => '2016-09-03 09:06',
            'user_id' => 3,
            'checkpoint_id' => 1,
        ]);

        Result::create([
            'time' => '2016-09-03 12:50',
            'user_id' => 3,
            'checkpoint_id' => 2,
        ]);

        Result::create([
            'time' => '2016-09-03 16:44',
            'user_id' => 3,
            'checkpoint_id' => 3,
        ]);

        Result::create([
            'time' => '2016-09-03 09:06',
            'user_id' => 4,
            'checkpoint_id' => 1,
        ]);

        Result::create([
            'time' => '2016-09-03 13:04',
            'user_id' => 4,
            'checkpoint_id' => 2,
        ]);

        Result::create([
            'time' => '	2016-09-03 17:11',
            'user_id' => 4,
            'checkpoint_id' => 3,
        ]);

        Result::create([
            'time' => '2016-09-03 09:06',
            'user_id' => 5,
            'checkpoint_id' => 1,
        ]);

        Result::create([
            'time' => '2016-09-03 12:16',
            'user_id' => 5,
            'checkpoint_id' => 2,
        ]);

        Result::create([
            'time' => '2016-09-03 15:47',
            'user_id' => 5,
            'checkpoint_id' => 3,
        ]);

        Result::create([
            'time' => '2016-09-03 09:06',
            'user_id' => 6,
            'checkpoint_id' => 1,
        ]);

        Result::create([
            'time' => '2016-09-03 13:40',
            'user_id' => 6,
            'checkpoint_id' => 2,
        ]);

        Result::create([
            'time' => '2016-09-03 17:36',
            'user_id' => 6,
            'checkpoint_id' => 3,
        ]);

        Result::create([
            'time' => '2016-09-03 09:06',
            'user_id' => 7,
            'checkpoint_id' => 1,
        ]);

        Result::create([
            'time' => '2016-09-03 14:06',
            'user_id' => 7,
            'checkpoint_id' => 2,
        ]);

        Result::create([
            'time' => '2016-09-03 09:06',
            'user_id' => 8,
            'checkpoint_id' => 1,
        ]);

        Result::create([
            'time' => '2016-09-03 12:43',
            'user_id' => 8,
            'checkpoint_id' => 2,
        ]);

        Result::create([
            'time' => '2016-09-03 17:02',
            'user_id' => 8,
            'checkpoint_id' => 3,
        ]);

        Result::create([
            'time' => '2016-09-03 09:06',
            'user_id' => 9,
            'checkpoint_id' => 1,
        ]);

        Result::create([
            'time' => '2016-09-03 12:56',
            'user_id' => 9,
            'checkpoint_id' => 2,
        ]);

        Result::create([
            'time' => '2016-09-03 16:44',
            'user_id' => 9,
            'checkpoint_id' => 3,
        ]);
        Result::create([
            'time' => '2016-09-03 09:06',
            'user_id' => 10,
            'checkpoint_id' => 1,
        ]);

        Result::create([
            'time' => '2016-09-03 12:16',
            'user_id' => 10,
            'checkpoint_id' => 2,
        ]);

        Result::create([
            'time' => '2016-09-03 15:44',
            'user_id' => 10,
            'checkpoint_id' => 3,
        ]);
    }
}
