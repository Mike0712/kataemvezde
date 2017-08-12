<?php

namespace App\Modules\Users\Database\Seeds;

use App\Modules\Users\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Администратор',
            'page_default' => 'profile',
        ]);
    }
}
