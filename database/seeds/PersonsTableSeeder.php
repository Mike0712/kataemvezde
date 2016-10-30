<?php

use Illuminate\Database\Seeder;
use App\Models\Person;

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
            'year_birth' => '1964-01-01 00:00',
            'user_id' => 1,
            'progress' => '1000+',
            'mission' => 'director',
            'club_id' => 1,
        ]);

        Person::create([
            'first_name' => 'Александр',
            'last_name' => 'Полтавский',
            'sex' => 'male',
            'year_birth' => '1958-01-01 00:00',
            'user_id' => 2,
            'progress' => '1000+',
            'mission' => 'member',
            'club_id' => 1,
        ]);

        Person::create([
            'first_name' => 'Юрий',
            'last_name' => 'Игнатов',
            'sex' => 'male',
            'year_birth' => '1976-01-01 00:00',
            'user_id' => 3,
            'progress' => '1000+',
            'mission' => 'org',
            'club_id' => 1,
        ]);

        Person::create([
            'first_name' => 'Андрей',
            'last_name' => 'Захаров',
            'sex' => 'male',
            'year_birth' => '1989-01-01 00:00',
            'user_id' => 4,
            'progress' => '1000+',
            'mission' => 'member',
            'club_id' => 1,
        ]);

        Person::create([
            'first_name' => 'Елена',
            'last_name' => 'Артёмова',
            'sex' => 'female',
            'year_birth' => '1960-01-01 00:00',
            'user_id' => 5,
            'progress' => '1000+',
            'mission' => 'org',
            'club_id' => 1,
        ]);

        Person::create([
            'first_name' => 'Александр',
            'last_name' => 'Дунаев',
            'sex' => 'male',
            'year_birth' => '1980-01-01 00:00',
            'user_id' => 6,
            'progress' => '1000+',
            'mission' => 'bigord',
            'club_id' => 1,
        ]);

        Person::create([
            'first_name' => 'Сергей',
            'last_name' => 'Пархоменко',
            'sex' => 'male',
            'year_birth' => '1980-01-01 00:00',
            'user_id' => 7,
            'progress' => '1000+',
            'mission' => 'member',
            'club_id' => 1,
        ]);

        Person::create([
            'first_name' => 'Алексей',
            'last_name' => 'Козлов',
            'sex' => 'male',
            'year_birth' => '1983-01-01 00:00',
            'user_id' => 8,
            'progress' => '1000+',
            'mission' => 'member',
            'club_id' => 1,
        ]);

        Person::create([
            'first_name' => 'Андрей',
            'last_name' => 'Усаченко',
            'sex' => 'male',
            'year_birth' => '1984-01-01 00:00',
            'user_id' => 9,
            'progress' => '1000+',
            'mission' => 'org',
            'club_id' => 1,
        ]);

        Person::create([
            'first_name' => 'Михаил',
            'last_name' => 'Чуриков',
            'sex' => 'male',
            'year_birth' => '1982-01-01 00:00',
            'user_id' => 10,
            'progress' => '1000+',
            'mission' => 'org',
            'club_id' => 1,
        ]);
    }
}
