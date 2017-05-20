<?php

namespace App\Modules\Main\Database\Seeds;

use Illuminate\Database\Seeder;
use App\Modules\Main\Models\Checkpoint;

class CheckpointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Checkpoint::create([
            'name' => 'Старт',
            'kilomeeter' => 0,
            'sort' => 1,
            'competition_id' => 1,
        ]);

        Checkpoint::create([
            'name' => 'Разворот',
            'kilomeeter' => 100,
            'sort' => 2,
            'competition_id' => 1,
        ]);

        Checkpoint::create([
            'name' => 'Финиш',
            'kilomeeter' => 200,
            'sort' => 3,
            'competition_id' => 1,
        ]);

        Checkpoint::create([
            'name' => 'Старт',
            'kilomeeter' => 0,
            'sort' => 1,
            'competition_id' => 2,
        ]);

        Checkpoint::create([
            'name' => 'Разворот',
            'kilomeeter' => 150,
            'sort' => 2,
            'competition_id' => 2,
        ]);

        Checkpoint::create([
            'name' => 'Финиш',
            'kilomeeter' => 300,
            'sort' => 3,
            'competition_id' => 2,
        ]);

        Checkpoint::create([
            'name' => 'Старт',
            'kilomeeter' => 0,
            'sort' => 1,
            'competition_id' => 3,
        ]);

        Checkpoint::create([
            'name' => 'Разворот',
            'kilomeeter' => 200,
            'sort' => 2,
            'competition_id' => 3,
        ]);

        Checkpoint::create([
            'name' => 'Финиш',
            'kilomeeter' => 400,
            'sort' => 3,
            'competition_id' => 3,
        ]);

        Checkpoint::create([
            'name' => 'Старт. Сквер имени Чаплыгина',
            'kilomeeter' => 0,
            'sort' => 1,
            'competition_id' => 4,
        ]);

        Checkpoint::create([
            'name' => 'КП1. Армянский шашлычный двор',
            'kilomeeter' => 310,
            'sort' => 2,
            'competition_id' => 4,
        ]);

        Checkpoint::create([
            'name' => 'Финиш. Краузе',
            'kilomeeter' => 600,
            'sort' => 3,
            'competition_id' => 4,
        ]);

        Checkpoint::create([
            'name' => 'Старт. Разъезд Иня',
            'kilomeeter' => 0,
            'sort' => 1,
            'competition_id' => 5,
        ]);

        Checkpoint::create([
            'name' => 'Разворот. с. Преображенка',
            'kilomeeter' => 100,
            'sort' => 2,
            'competition_id' => 5,
        ]);

        Checkpoint::create([
            'name' => 'Финиш',
            'kilomeeter' => 200,
            'sort' => 3,
            'competition_id' => 5,
        ]);

        Checkpoint::create([
            'name' => 'Старт. Разъезд Иня',
            'kilomeeter' => 0,
            'sort' => 1,
            'competition_id' => 6,
        ]);

        Checkpoint::create([
            'name' => 'Разворот. пос. Сузун',
            'kilomeeter' => 180,
            'sort' => 2,
            'competition_id' => 6,
        ]);

        Checkpoint::create([
            'name' => 'Финиш. Автовокзал Искитим',
            'kilomeeter' => 300,
            'sort' => 3,
            'competition_id' => 6,
        ]);

        Checkpoint::create([
            'name' => 'Старт. Разъезд Иня',
            'kilomeeter' => 0,
            'sort' => 1,
            'competition_id' => 7,
        ]);

        Checkpoint::create([
            'name' => 'с. Маслялнино',
            'kilomeeter' => 210,
            'sort' => 2,
            'competition_id' => 7,
        ]);

        Checkpoint::create([
            'name' => 'Финиш. площадь Ленина',
            'kilomeeter' => 400,
            'sort' => 3,
            'competition_id' => 7,
        ]);

        Checkpoint::create([
            'name' => 'Старт. Разъезд Иня',
            'kilomeeter' => 0,
            'sort' => 1,
            'competition_id' => 8,
        ]);

        Checkpoint::create([
            'name' => 'КП 1. Кафе Юлия',
            'kilomeeter' => 300,
            'sort' => 2,
            'competition_id' => 8,
        ]);

        Checkpoint::create([
            'name' => 'Финиш. площадь Ленина',
            'kilomeeter' => 600,
            'sort' => 3,
            'competition_id' => 8,
        ]);

        Checkpoint::create([
            'name' => 'Старт. Разъезд Иня',
            'kilomeeter' => 0,
            'sort' => 1,
            'competition_id' => 9,
        ]);

        Checkpoint::create([
            'name' => 'КП1. Юлия',
            'kilomeeter' => 300,
            'sort' => 2,
            'competition_id' => 9,
        ]);

        Checkpoint::create([
            'name' => 'КП2. Березово',
            'kilomeeter' => 480,
            'sort' => 3,
            'competition_id' => 9,
        ]);

        Checkpoint::create([
            'name' => 'КП3. Скала',
            'kilomeeter' => 950,
            'sort' => 4,
            'competition_id' => 9,
        ]);

        Checkpoint::create([
            'name' => 'Финиш. У Виктора',
            'kilomeeter' => 1000,
            'sort' => 5,
            'competition_id' => 9,
        ]);
    }
}
