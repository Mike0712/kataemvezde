<?php

namespace App\Modules\Users\Database\Seeds;

use Illuminate\Database\Seeder;
use \Illuminate\Foundation\Auth\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'igo',
            'email' => 'igo@test.ru',
            'password' =>'$2y$10$O25adCIHCa0XuRrzMTO1duohc7Uy58poAvoiEKu5F5KQ6VPf7hiNu',
        ]);

        User::create([
            'name' => 'Алхимик',
            'email' => 'alkhimik@test.ru',
            'password' =>'$2y$10$O25adCIHCa0XuRrzMTO1duohc7Uy58poAvoiEKu5F5KQ6VPf7hiNu',
        ]);

        User::create([
            'name' => 'Ярус',
            'email' => 'jarusrus@test.ru',
            'password' =>'$2y$10$O25adCIHCa0XuRrzMTO1duohc7Uy58poAvoiEKu5F5KQ6VPf7hiNu',
        ]);

        User::create([
            'name' => 'AVZ',
            'email' => 'avz@test.ru',
            'password' =>'$2y$10$O25adCIHCa0XuRrzMTO1duohc7Uy58poAvoiEKu5F5KQ6VPf7hiNu',
        ]);

        User::create([
            'name' => 'artel',
            'email' => 'artel@test.ru',
            'password' =>'$2y$10$O25adCIHCa0XuRrzMTO1duohc7Uy58poAvoiEKu5F5KQ6VPf7hiNu',
        ]);

        User::create([
            'name' => 'Phantom',
            'email' => 'phantom@test.ru',
            'password' =>'$2y$10$O25adCIHCa0XuRrzMTO1duohc7Uy58poAvoiEKu5F5KQ6VPf7hiNu',
        ]);

        User::create([
            'name' => 'liveparhomenko',
            'email' => 'liveparhomenko@test.ru',
            'password' =>'$2y$10$O25adCIHCa0XuRrzMTO1duohc7Uy58poAvoiEKu5F5KQ6VPf7hiNu',
        ]);

        User::create([
            'name' => 'Лёха',
            'email' => 'leha@test.ru',
            'password' =>'$2y$10$O25adCIHCa0XuRrzMTO1duohc7Uy58poAvoiEKu5F5KQ6VPf7hiNu',
        ]);

        User::create([
            'name' => 'AndreWWW',
            'email' => 'usachenko@test.ru',
            'password' =>'$2y$10$O25adCIHCa0XuRrzMTO1duohc7Uy58poAvoiEKu5F5KQ6VPf7hiNu',
        ]);

        User::create([
            'name' => 'MikhailChurikov',
            'email' => 'barrister2003@gmail.ru',
            'password' =>'$2y$10$O25adCIHCa0XuRrzMTO1duohc7Uy58poAvoiEKu5F5KQ6VPf7hiNu',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@test.ru',
            'password' =>'$2y$10$O25adCIHCa0XuRrzMTO1duohc7Uy58poAvoiEKu5F5KQ6VPf7hiNu',
        ]);
    }
}
