<?php

namespace App\Modules\Users\Database\Seeds;

use Illuminate\Database\Seeder;

class UsersDatabaseSeeder extends Seeder
{
    /**
     * Run seeds for Main
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PersonsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
