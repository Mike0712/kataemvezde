<?php

namespace App\Modules\Users\Database\Seeds;

use Illuminate\Database\Seeder;
use App\Modules\Users\Models\Person;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'first_name' => 'Игорь',
            'last_name' => 'Березёнков',
            'sex' => 'male',
            'birthday' => '1964-01-01',
            'user_id' => 1,
        ]);

        Person::create([
            'first_name' => 'Александр',
            'last_name' => 'Полтавский',
            'sex' => 'male',
            'birthday' => '1958-01-01',
            'user_id' => 2,
        ]);

        Person::create([
            'first_name' => 'Юрий',
            'last_name' => 'Игнатов',
            'sex' => 'male',
            'birthday' => '1976-01-01',
            'user_id' => 3,
        ]);

        Person::create([
            'first_name' => 'Андрей',
            'last_name' => 'Захаров',
            'sex' => 'male',
            'birthday' => '1989-01-01',
            'user_id' => 4,
        ]);

        Person::create([
            'first_name' => 'Елена',
            'last_name' => 'Артёмова',
            'sex' => 'female',
            'birthday' => '1960-01-01',
            'user_id' => 5,
        ]);

        Person::create([
            'first_name' => 'Александр',
            'last_name' => 'Дунаев',
            'sex' => 'male',
            'birthday' => '1980-01-01',
            'user_id' => 6,
        ]);

        Person::create([
            'first_name' => 'Сергей',
            'last_name' => 'Пархоменко',
            'sex' => 'male',
            'birthday' => '1980-01-01',
            'user_id' => 7,
        ]);

        Person::create([
            'first_name' => 'Алексей',
            'last_name' => 'Козлов',
            'sex' => 'male',
            'birthday' => '1983-01-01',
            'user_id' => 8,
        ]);

        Person::create([
            'first_name' => 'Андрей',
            'last_name' => 'Усаченко',
            'sex' => 'male',
            'birthday' => '1984-01-01',
            'user_id' => 9,
        ]);

        Person::create([
            'first_name' => 'Михаил',
            'last_name' => 'Чуриков',
            'sex' => 'male',
            'birthday' => '1982-01-01',
            'user_id' => 10,
        ]);
    }
}
