<?php

namespace App\Modules\Users\Database\Seeds;

use App\Modules\Users\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'user_id' => 11,
            'role_id' => 1,
        ]);
    }
}
